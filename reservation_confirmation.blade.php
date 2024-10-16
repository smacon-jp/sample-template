@extends('main.layouts.app')
@section('title', '予約確認')
@section('content')
    @if($billingAmount !=0)
        <script src="https://www.paypal.com/sdk/js?client-id={{config('paypal.client_id')}}&currency={{config('paypal.currency')}}&locale=ja_JP"></script>
    @endif
<section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>予約確認</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="form03 reservation-confirmation pb-5 cid-u74FbjrbCE" id="form03-10">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-12 col-md-8">
                    <h4 class="text-white">予約メニュー情報</h4>
                    <div class="bg-white px-3 py-2 mb-3 reservation-menu-item">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3">
                                <div class="image-wrapper">
                                    @if($menu_img == "")
                                    <img src="{{asset('/html/main/assets/images/table-01.jpg')}}" alt="予約倶楽部 （Basic）" data-slide-to="0" data-bs-slide-to="0">
                                    @else
                                        <img class="img-fluid img-responsive rounded menu-image" src="/storage/{{$menu_img}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <div class="card-box">
                                    <div class="row align-items-center">
                                        <div class="col-md">
                                            <h5 class="card-title mbr-fonts-style d-flex justify-content-between"><strong>{{$menuName}}</strong> <strong class="text-primary">{{number_format($menuPrice)}}円<small>(税込)</small></strong></h5>
                                            @if($menu_id == 0)
                                                <p class="para mb-0"> お店では、予約した日時に合わせて、仲間と一緒に飲食することができます。<br>
                                                    <span class="text-info">※ 団体様のコースにつきましては、ご予約時にご相談ください。</span> </p>
                                            @else
                                                <p class="mbr-text text-black">{{$menuDescription}}</p>
                                            @endif
                                            @php
                                                $timestemp = strtotime($reservation_date);
                                                $week = array( "日", "月", "火", "水", "木", "金", "土" );
                                                $week = $week[date("w", $timestemp)];
                                                $reserve_date = date('Y年m月d日', $timestemp)." (".$week.")";
                                            @endphp
                                        </div>
                                        <div class="alert-primary p-2 mt-3 m-0"><p class="m-0 p-0">※ {{ $reserve_date." ".$reservation_time}}より{{$guest_num}}名様で予約開始</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="reservation-sidebar">
                        <div class="reservation-summary shadow mb-3">
                            <form class="reservation-confirmation" method="POST" action="/store_reservation">
                                @csrf
                                <input type="hidden" name="confirmed" value="true">
                                <input type="hidden" name="shop_id" value="1">
                                @if($billingAmount == 0)
                                    <input type="hidden" name="is_paid" value="0">
                                @else
                                    <input type="hidden" name="is_paid" value="1">
                                @endif
                                <input type="hidden" name="selected_menus" value="{{$menu_id}}">
                                <input type="hidden" name="guest_num" value="{{$guest_num}}">
                                <input type="hidden" name="reservation_date" value="{{$reservation_date}}">
                                <input type="hidden" name="reservation_time" value="{{$reservation_time}}">
                                <input type="hidden" name="billing_amt" value="{{$billingAmount}}">
                                <input type="hidden" name="remarks" value="{{$reservation_note}}">
                                <div class="card bg-white">
                                    <div class="card-header text-center font-weight-bold bg-primary text-white">予約概要</div>
                                    <div class="card-body pb-0 p-2 p-md-3">
                                        <div class="order-cont">
                                            <table class="booking-info table table-borderless">
                                                <tr>
                                                    <td>予約日</td>
                                                    <td class="font-weight-bold reservation_date">{{$reserve_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>予約時間</td>
                                                    <td class="font-weight-bold reservation_time">{{$reservation_time}}</td>
                                                </tr>
                                                <tr>
                                                    <td>予約人数</td>
                                                    <td class="font-weight-bold guest_num">{{$guest_num}}名</td>
                                                </tr>
                                                <tr>
                                                    <td>予約コース</td>
                                                    <td class="font-weight-bold" id="menu_name">{{$menuName}}</td>
                                                </tr>
                                                <tr>
                                                    <td>コース料金</td>
                                                    <td class="font-weight-bold reservation_date">{{$menuPrice}}円 × {{$guest_num}}名 =
                                                        {{number_format($billingAmount)}}円</td>
                                                </tr>
                                            </table>
                                            <hr>
                                            <div class="d-flex justify-content-between pb-2 pb-md-0">
                                                <span>合計金額</span>
                                                <div class="total-price"> <strong class="menu_price text-primary h4">{{number_format($billingAmount)}}円</strong><span class="text-primary small">(税込)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <p class="text-primary small p-0 m-0">※予約内容をご確認の上、ご予約をお願いします。 </p>
                                        @if($billingAmount !=0)
                                            <div id="paypal-button-container">
                                                <p></p>
                                                <div class="paypal-btns"></div>
                                            </div>
                                        @else
                                            <button type="submit" class="btn btn-primary w-100">予約を確定する</button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="policy header13 cid-u74vPYo0KZ" id="header13-d">
        <div class="container bg-white p-4 rounded shadow">
            <div class="row">
                <div class="col-12">
                    @if(!empty($shop->cancellation_policy) || !empty($shop->precautions))
                        <div class="text-center">
                            <h4>キャンセルポリシーと注意事項について。</h4>
                        </div>
                        <div class="shop-reservation-canceling border rounded p-4">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-6 border-right">
                                    <h5 class="text-danger">キャンセルポリシー</h5>
                                    <pre class="break-word">{{$shop->cancellation_policy}}</pre>
                                </div>
                                <div class="col-12 col-md-5">
                                    <h5 class="text-danger">注意事項</h5>
                                    <pre class="break-word">{!! nl2br($shop->precautions) !!}</pre>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page_script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/html/main/assets/bootstrap/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('/html/main/assets/bootstrap/js/bootstrap-datepicker.ja.min.js')}}"></script>
    <script src="{{asset('/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('/assets/js/moment-with-locales.js')}}"></script>
    @if($billingAmount !=0)
        <script>
            window.app = window.app || {};
            app.currency = {
                "symbol": "JPY",
                "symbol_position": false,
                "thousand_sign": ",",
                "decimal_sign": ".",
                "decimal_precision": "2"
            };
            //Custom Exception Func
            function PayPalException(name, message){
                this.name = name;
                this.message = message;
            }
            paypal.Buttons({
                style: {
                    layout: 'vertical',
                    size:  'small',   // small | medium | large | responsive
                    shape: 'rect',   // pill | rect
                    color: 'gold',   // gold | blue | silver | black
                    label: 'pay',   // paypal | checkout | buynow | pay | installment
                },
                createOrder: function(data, actions){ //결제 요청
                    return fetch('/verified-product', {
                        method:'POST',
                        headers:{
                            "Content-Type": "application/json;charset=utf-8",
                            "X-CSRF-TOKEN": document.getElementById("csrf-token").getAttribute("content")
                        },
                        body: JSON.stringify({
                            menu_id: {{$menu_id}},
                            guest_num: {{$guest_num}}
                        })
                    }).then(function (response){
                        return response.json();
                    }).then(function (result){
                        console.log(result);
                        if(result.valid === true){
                            console.log(result.purchase_units.description);
                            console.log(result.purchase_units.amount.value);
                            console.log(result.purchase_units.amount.currency);
                            $('#is_paid').attr('value', '1');
                            $('#paypal-button-container p').html('決済が完了するまでお待ちください。。。。');
                            return actions.order.create({
                                payer: {
                                    name: {
                                        given_name: "{{$customer->first_name}}",
                                        surname: "{{$customer->last_name}}"
                                    },
                                    email_address: "{{$customer->email}}",
                                    address: {
                                        address_line_1: '中央区月島1-8-1 アイマークタワー1F 103',
                                        admin_area_1: '東京都',
                                        postal_code: '1040052',
                                        country_code: 'JP'
                                    },
                                    phone: {
                                        phone_type: "MOBILE",
                                        phone_number: {
                                            national_number: "{{preg_replace('/\D+/', '', $customer->telephone)}}"
                                        }
                                    }
                                },
                                purchase_units: [{
                                    description: result.purchase_units.description,
                                    amount: {
                                        value: result.purchase_units.amount.value,
                                        currency: result.purchase_units.amount.currency
                                    },
                                }],
                                application_context: {
                                    shipping_preference: 'NO_SHIPPING'
                                }
                            });
                        } else {
                            throw PayPalException(result.name, result.message);
                            $('#is_paid').attr('value', '0');
                        }
                    });
                },
                onApprove: function(data, actions){
                    let res = fetch('/order-capture', {
                        method: 'POST',
                        headers: {
                            "Content-Type": "application/json;charset=utf-8",
                            "X-CSRF-TOKEN": document.getElementById("csrf-token").getAttribute("content")
                        },
                        body: JSON.stringify({ //결제 정보를 DB에 등록하는 경우, 이곳에서 데이터를 전달합니다.
                            order_id: data.orderID
                        })
                    }).then(function (response){
                        return response.json();
                    }).then( function (result){
                        if(result.valid === true){
                            $('#paypal-button-container p').show();
                            $('#paypal-button-container .paypal-btns').hide();
                            $('#paypal-button-container p').html('お待ちください。<span><b>予約が保存されています。</span>');
                            $(':input[type="submit"]').prop('disabled', false);
                            // alert('결제가 완료되었습니다.');
                            $(".reservation-confirmation").submit();
                        } else {
                            throw new PayPalException(result.name, result.message);
                        }
                    }).catch(function(err){
                        alert('[' + err.name + ']\n' + err.message);
                    });
                },
                onError: function(err){
                    alert('[' + err.name + ']\n' + err.message);
                },
                onCancel: function(data){
                    $('#paypal-button-container p').hide();
                    $('#paypal-button-container .paypal-btns').show();
                }
            }).render('#paypal-button-container .paypal-btns');
        </script>
    @endif
@stop