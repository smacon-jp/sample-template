@extends('main.layouts.app')
@section('content')
<script src="https://www.paypal.com/sdk/js?client-id={{config('paypal.client_id')}}&currency={{config('paypal.currency')}}&locale=ja_JP"></script>

<div class="bg-gray-100 h-screen py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <form action="{{ route('main.cart.update') }}" method="POST">
                        @csrf
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left font-semibold">商品</th>
                                    <th class="text-left font-semibold">料金</th>
                                    <th class="text-left font-semibold">品数</th>
                                    <th class="text-left font-semibold">合計</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $productId => $item)
                                <tr>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                                            <span class="font-semibold">{{ $item['name'] }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4">${{ number_format($item['price'], 2) }}</td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <input type="hidden" name="items[{{ $productId }}][id]" value="{{ $item['id'] }}">
                                            <button type="button" class="border rounded-md py-2 px-4 mr-2" onclick="changeQuantity('{{ $productId }}', -1)">-</button>
                                            <input type="number" name="items[{{ $productId }}][quantity]" value="{{ $item['quantity'] }}" class="text-center w-8" min="1">
                                            <button type="button" class="border rounded-md py-2 px-4 ml-2" onclick="changeQuantity('{{ $productId }}', 1)">+</button>
                                            <button type="button" class="text-red-500 ml-4" onclick="removeItem('{{ $item['id'] }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-4">${{ number_format($item['total'], 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4">カートを更新する</button>
                    </form>
                </div>
            </div>
            <div class="md:w-1/4">
                <form action="" method="POST">
                    @csrf
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">詳細</h2>
                        <div class="flex justify-between mb-2">
                            <span>合計</span>
                            <span>${{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>税</span>
                            <span>${{ number_format($taxes, 2) }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>送料</span>
                            <span>${{ number_format($shipping, 2) }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">${{ number_format($total, 2) }}</span>
                        </div>
                        {{-- <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">購入へ進む</button> --}}
                        <div id="paypal-button-container">
                            <p></p>
                            <div class="paypal-btns"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function changeQuantity(productId, change) {
        const quantityInput = document.querySelector(`input[name="items[${productId}][quantity]"]`);
        let quantity = parseInt(quantityInput.value);
        quantity = Math.max(1, quantity + change);
        quantityInput.value = quantity;
    }
     

</script>
<script>
    function removeItem(productId) {

        console.log('Product ID:', productId);
        // AJAXリクエストを送信
        fetch('{{ route("main.cart.remove") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ productId: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // カートのアイテムが削除された場合、画面を更新
                window.location.reload();
            } else {
                console.error('Failed to remove item from cart:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>


<script>
    paypal.Buttons({
    createOrder: function(data, actions) {
        // 商品ID、金額、数量の配列を作成
        const items = Array.from(document.querySelectorAll('tbody tr')).map(row => {
            const itemId = row.querySelector('input[name*="[id]"]')?.value;
            const itemQuantity = parseInt(row.querySelector('input[name*="[quantity]"]')?.value);
            const itemPrice = parseFloat(row.querySelector('td:nth-child(2)')?.textContent.replace('$', ''));

            if (itemId && itemQuantity && !isNaN(itemPrice)) {
                return { id: itemId, price: itemPrice, quantity: itemQuantity };
            } else {
                console.error('Item ID, Quantity, or Price element not found');
                return null; // エラーが発生した場合は null を返す
            }
        }).filter(item => item !== null); // null を除外する

        // バックエンドにデータを送信し、PayPalの注文IDを取得
        return fetch('/create-order', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ items: items })
        })
        .then(function(res) {
            return res.json();  // JSONレスポンスを返す
        })
        .then(function(responseData) {
            console.log('Response from backend:', responseData);  // コンソールにレスポンスを出力
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: 'JPY', // 通貨コードを設定
                        value: items.reduce((total, item) => total + (item.price * item.quantity), 0).toFixed(2), // 合計金額を計算し、2桁の小数点に
                        breakdown: {
                            item_total: {
                                currency_code: 'JPY',
                                value: items.reduce((total, item) => total + (item.price * item.quantity), 0).toFixed(2) // item_total を設定
                            }
                        }
                    },
                    items: items.map(item => ({
                        name: item.id, // 商品名としてIDを使用する場合
                        unit_amount: {
                            currency_code: 'JPY', // 通貨コードを設定
                            value: item.price.toFixed(2) // 価格を2桁の小数点に
                        },
                        quantity: item.quantity // 商品の数量
                    }))
                }]
            });
        });
    },
    onApprove: function(data, actions) {
        // 支払い完了時にバックエンドに orderID を送信
        return fetch('/capture-order', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                orderID: data.orderID
            })
        })
        .then(function(res) {
            return res.json();
        })
        .then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
        });
    }
}).render('#paypal-button-container');


</script>

@endsection
