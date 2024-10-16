@extends('main.layouts.app')
@section('title', 'お店舗について')
@section('content')

<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Responsive Product card grid</h1>
    <h1 class="text-3xl">Tailwind CSS</h1>
</div>

<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <!--   ✅ Product card 1 - Starts Here 👇 -->
    @foreach ($products as $product)
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->product_name }}</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">{{ $product->sale_price }}</p>
                    <del style="text-decoration: line-through; text-decoration-color: red;">
                        <p class="text-sm text-gray-600 cursor-auto ml-2">{{ $product->price }}</p>
                    </del>
                    <div class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mb-4">
                <button type="button" class="bg-blue-500 text-white px-5 py-2.5 rounded-md border border-white hover:bg-blue-600 hover:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200 ease-in" onclick="addToCart({{ $product->id }})">カートに入れる</button>
            </div>
        </div>
    @endforeach

</section>
@endsection
<script>
    function addToCart(productId) {
        fetch('/add-to-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('商品がカートに追加されました！');
            } else {
                alert('商品をカートに追加できませんでした。');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('エラーが発生しました。');
        });
    }
</script>