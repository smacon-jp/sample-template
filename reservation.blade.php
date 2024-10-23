@extends('main.layouts.app')
@section('page_css')
    <link href="{{asset('/html/main/assets/bootstrap/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/html/main/assets/bootstrap/css/datepicker.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        .mbr-section-btn .btn:not(.btn-form) {
            border-radius: 0px;
        }
        .form-control{
            border-radius: 0px !important;
        }
    </style>
@endsection
@section('title', '予約')
@section('content')
    <section class="reservation-menus">
        <div class="container">
            <h1 class="text-center mt-5 mb-5">予約</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    @foreach($menus as $menu)
                        <div class="card mb-3 reservation-menu-item border-0 shadow-sm">
                            <div class="row g-0 align-items-center">
                                <div class="col-4 col-md-3">
                                    <img src="{{$menu->MainImagePath}}" class="img-fluid rounded-start" alt="{{$menu->name}}" style="object-fit: cover; height: 120px; width: 100%;">
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-2">
                                        <h5 class="card-title fs-6 fw-bold mb-1">{{$menu->name}}</h5>
                                        <p class="card-text small mb-2" style="line-height: 1.4;">{{Str::limit($menu->description, 60)}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fs-6 fw-bold text-primary">{{number_format($menu->price)}}円<small class="text-muted fw-normal">(税込)</small></span>
                                            <a href="javascript:void(0)"
                                               data-menuid="{{$menu->id}}"
                                               data-menuprice="{{$menu->price}}"
                                               data-menuname="{{$menu->name}}"
                                               class="btn btn-sm btn-outline-primary order-menus">
                                                予約する
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if($srs->isAcceptableSeatsOnly)
                        <div class="card mb-3 reservation-menu-item border-0 shadow-sm bg-light">
                            <div class="row g-0 align-items-center">
                                <div class="col-4 col-md-3">
                                    <img src="{{asset('html/main/assets/images/table-01.jpg')}}" class="img-fluid rounded-start" alt="席だけ予約" style="object-fit: cover; height: 120px; width: 100%;">
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-2">
                                        <h5 class="card-title fs-6 fw-bold mb-1">席だけ予約</h5>
                                        <p class="card-text small mb-2" style="line-height: 1.4;">お店では、予約した日時に合わせて、仲間と一緒に飲食することができます。</p>
                                        <p class="card-text"><small class="text-danger">※ 団体様のコースは予約時相談</small></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fs-6 fw-bold text-primary">0円<small class="text-muted fw-normal">(税込)</small></span>
                                            <a href="javascript:void(0)"
                                               data-menuid="0"
                                               data-menuprice="0"
                                               data-menuname="席のみ予約"
                                               class="btn btn-sm btn-primary order-menus">
                                                席のみ予約
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-lg-4 item-wrapper">
                    <div class="top-sticky reservation-sidebar">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="mbr-fonts-style text-center mb-3 fw-bold">予約する</h3>
                                <p class="text-center mb-4">日時と人数は適宜選択してください。</p>
                                <div class="col-lg-12 mx-auto mbr-form">
                                    <div class="row">
                                        <input type="hidden" id="shop_id" value="1">
                                        <div class="col-12 form-group mb-3 text-center" data-for="resrvCalendar">
                                            <input type="text" id="resrvCalendar" placeholder="Select Date" class="form-control dateselect" autocomplete="off" value="" data-control="datepicker" data-format="mm/dd/yyyy" data-language="jp" readonly="readonly">
                                        </div>
                                        <div class="col-6 form-group mb-3" data-for="guest_num">
                                            <div class="input-group">
                                                <select class="select_people form-control form-select w-100" data-dropup-auto="false" data-size="10" aria-label="select" name="guest_num">
                                                    @for ($i = $shop_min_cap; $i <= $shopinfo->max_capacity; $i++)
                                                        <option value="{{$i}}" {{$i === 2 ? 'selected': ''}} >{{$i}}名</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                <select class="store_reservable_time form-control form-select" data-dropup-auto="false" data-size="5" aria-label="select" name="time" title="予約時間の選択" required>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 border-0 p-0">
                            <div class="card-body p-0">
                                <form class="reservation-form" method="POST" action="/reservation_confirmation">
                                    @csrf
                                    <input type="hidden" id="menu_id" name="menu_id" value="{{old('menu_id')}}">
                                    <input type="hidden" id="menu_price" name="menu_price" value="{{old('menu_price')}}">
                                    <input type="hidden" id="menu_name" name="menu_name" value="{{old('menu_name')}}">
                                    <input type="hidden" id="reservation_time" name="reservation_time" value="{{old('reservation_time')}}">
                                    <input type="hidden" id="reservation_date" name="reservation_date" value="{{old('reservation_date')}}">
                                    <input type="hidden" id="guest_num" name="guest_num" value="2">
                                    <div class="card p-0 w-100">
                                        <div class="card-header text-center fw-bold bg-primary text-white">予約概要</div>
                                        <div class="card-body p-3">
                                            <div class="order-cont">
                                                <table class="booking-info table table-borderless">
                                                    <tr>
                                                        <td>予約日</td>
                                                        <td class="fw-bold reservation_date">2022年04月08日 (金)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>予約時間</td>
                                                        <td class="fw-bold reservation_time">予約時間の選択</td>
                                                    </tr>
                                                    <tr>
                                                        <td>予約人数</td>
                                                        <td class="fw-bold guest_num">2名</td>
                                                    </tr>
                                                    <tr>
                                                        <td>予約コース</td>
                                                        <td class="fw-bold menu_name">席のみ予約</td>
                                                    </tr>
                                                    <tr>
                                                        <td>コース料金</td>
                                                        <td class="fw-bold course_price">0円</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>合計金額</span>
                                                <div class="total-price">
                                                    <strong class="total_price text-primary h4">0円</strong>
                                                    <span class="text-primary small">(税込)</span>
                                                </div>
                                            </div>
                                            <div class="text-end mb-3">
                                                <span class="bill-calculation small text-muted">0円 × 2名</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="reservation_note" class="form-label">予約備考</label>
                                                <textarea class="form-control" id="reservation_note" name="reservation_note" placeholder="ご要望がありましたらお書きください。"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">予約へすすむ</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card p-0 w-100">
                            <div class="card-body">
                                <h4 class="card-title">お店お知らせ</h4>
                                <p class="card-text">開始時間 11:30 AM. 終了時刻は午後11時です。終了時刻の1時間前まで予約可能です。</p>
                                <a href="tel:050-5213-7364" class="btn btn-danger btn-lg w-100">
                                    <i class="fa fa-phone-volume"></i> 050-5213-7364
                                </a>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript">
        //int calendar setup
        $(document).ready(function() {
            moment.locale('ja');
            //get selected menu
            var URLparams = new URLSearchParams(window.location.search);
            var menuId = URLparams.get('menu_id');
            var guestNum = URLparams.get('guest_num');
            var gettime = URLparams.get('time');
            var defaultDate = moment(URLparams.get('date'), "YYYY年MM月DD日", true);
            var set_date = defaultDate.isValid() ? defaultDate.format('YYYY-MM-DD') : moment().format('YYYY-MM-DD');
            var menu_id = menuId || 0;
            var selected_guest = guestNum || 2;
            var menu_price = 0;
            $('.guest_num').text(selected_guest+"名");
            $('#guest_num').val(selected_guest);
            $('#reservation_time').val(gettime);
            $('.select_people').val(selected_guest);
            update_time_series(set_date, selected_guest, gettime);
            var date = new Date();
            date.setDate(date.getDate());
            var day_off = [];
            var shop_holiday = @json($shop_holiday->holiday_dates ?? '');
            var shop_day_off = @json($shop_day_off ?? '');
            for ( var d = 0; d < shop_day_off.length; d++) {
                var weekday = shop_day_off[d].week_day;
                day_off.push(weekday);
            }
            shop_holiday = shop_holiday.split(',');
            //console.log(set_date);
            shop_holiday.sort(function(a,b){
                var da = new Date(a).getTime();
                var db = new Date(b).getTime();
                return da < db ? -1 : da > db ? 1 : 0
            });
            //check next available dates
            for ( var i = 0; i < 60; i++) {
                var dow = moment(set_date).day();
                if($.inArray(set_date, shop_holiday) != -1) {
                    set_date = moment(set_date).add(1, "day").format("YYYY-MM-DD");
                }
                if ($.inArray(dow, day_off) != -1) {
                    set_date = moment(set_date).add(1, "day").format("YYYY-MM-DD");
                }
            }
            //calendar generate
            $('#resrvCalendar').datepicker({
                format: 'yyyy年mm月dd日',
                todayHighlight: true,
                language: 'ja',
                autoclose: true,
                orientation: "auto",
                endDate: "+2M",
                startDate: date,
                daysOfWeekDisabled: day_off,
                datesDisabled: shop_holiday,
            }).datepicker("setDate", set_date);


            $(".order-menus").each(function( index ) {
                if($(this).data('menuid') == menu_id){
                    $(this).toggleClass("active");
                    var menu_name = $(this).data('menuname');
                    menu_price = $(this).data('menuprice');
                    checkoutBilling (menu_id, menu_name, menu_price, selected_guest, set_date);
                }
            });
            //onclick select menu and display in right sidebar
            $('.reservation-menus .reservation-menu-item .order-menus').click(function(){
                $('.reservation-menus .reservation-menu-item .order-menus').removeClass("active");
                $(this).toggleClass("active");
                //get/show active menu id, price and name
                if ( $(this).hasClass("active") ) {
                    var menu_id = $(this).data('menuid');
                    var menu_name = $(this).data('menuname');
                    menu_price = $(this).data('menuprice');
                    //bill-calculation
                    checkoutBilling (menu_id, menu_name, menu_price, selected_guest, set_date)
                }
            });

            //onchange calendar get reservation time
            $('#resrvCalendar').datepicker().on('changeDate', function(ev) {
                $('.reservation_date').text($(this).data('datepicker').getFormattedDate('yyyy年mm月dd日 (D)'));
                set_date = $(this).data('datepicker').getFormattedDate('yyyy-mm-dd');
                $("#reservation_date").val(set_date);
                $('.reservation_time').text('予約時間の選択');
                update_time_series (set_date, selected_guest);
            });

            //onchange time event
            //onchange time event
            $('.store_reservable_time').change(function () {
                var selected_time = $(this).val();
                $('.reservation_time').text(selected_time);
                $('#reservation_time').val(selected_time);
                if(selected_time) {
                    $(".store_reservable_time").removeClass('border-danger');
                }
            });

            //onchange guest num
            $('.select_people').change(function () {
                selected_guest = $(this).val();
                $('.guest_num').text(selected_guest+"名");
                $('.reservation_time').text('予約時間の選択');
                $('#guest_num').val(selected_guest);
                var total = numberFormat(menu_price*selected_guest);
                $('.total_price').text(total+'円');
                $('.bill-calculation').text(numberFormat(menu_price)+'円'+ ' × ' +selected_guest+'名');
                update_time_series (set_date, selected_guest);
            });

            //check if menu id and people is empty or not
            $('.reservation-form').submit(function() {
                if ($.trim($("#menu_id").val()) === "") {

                    return false;
                } else if ($.trim($("#guest_num").val()) === "") {
                    $(".select_people").addClass('border-danger');
                    $('html, body').animate({
                        scrollTop: $("#reservation_time").offset().top
                    }, 500);
                    return false;
                } else if ($.trim($("#reservation_time").val()) === "") {
                    $(".store_reservable_time").addClass('border-danger');
                    $('html, body').animate({
                        scrollTop: $("#reservation_time").offset().top
                    }, 500);
                    return false;
                } else {
                    return true;
                }
            });
        });

        //update reservation time
        update_time_series = function(date, guest_num, gettime) {
            var date_str = date;
            var shop_id = $('#shop_id').val();
            $(".store_reservable_time option:selected").removeAttr("selected");
            $('.store_reservable_time option').remove();
            $.ajax({
                url: `/api/get_time_series?shop_id=${shop_id}&date=${date_str}&guest_num=${guest_num}`,
                type: 'GET',
                timeout: 10000, // milli-second
                beforeSend: function(xhr, settings) {},
                complete: function(xhr, textStatus) {},
                success: function(result, textStatus, xhr) {
                    if (result['success'] === true) {
                        //$(".errorBlock .no-data").remove();
                        if (result['available_times'].length > 0) {
                            //$('.errorBlock').remove();
                            result['available_times'].forEach(function(i, e) {
                                var resTime = i;
                                $(".store_reservable_time").append('<option value="'+resTime+'">'+resTime+'</option>');
                                //get default time
                                if(gettime) {
                                    $('.store_reservable_time').val(gettime);
                                    $('.reservation_time').text(gettime);
                                }
                            });
                        } else {
                            $(".store_reservable_time").append('<option value="'+resTime+'">利用可能な時間帯がございません</option>');
                            //$(".errorBlock").append(`<label class="no-data">利用可能な時間帯がございません。</label>`);
                        }
                    } else {
                        alert(result['message']);
                    }

                },
                error: function(xhr, textStatus, error) {
                    console.log(error)
                    //alert('NG...');
                    //$("#timeout").modal();
                }
            });

            // $(".store_reservable_time").prop("disabled", 0);
        };

        //update checkout information
        function checkoutBilling (menu_id, menu_name, menu_price, selected_guest, set_date) {
            var total = numberFormat(menu_price*selected_guest);
            $('.menu_name').text(menu_name);
            $('#menu_name').val(menu_name);
            $('.total_price').text(total+'円');
            $('.course_price').text(numberFormat(menu_price)+'円');
            $('#menu_price').val(menu_price);
            $('#menu_id').val(menu_id);
            $('.bill-calculation').text(numberFormat(menu_price)+'円'+ ' × ' +selected_guest+'名');
            $('.reservation_date').text(moment(set_date).format('YYYY年MM月Do (dd)'));
            $('.reservation_time').val();
            $("#reservation_date").val(set_date);
        }
        //number to local string
        function numberFormat(x){
            return x.toLocaleString('ja-JP');
        }
    </script>
@stop