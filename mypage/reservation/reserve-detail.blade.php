@extends('main.layouts.default')
@section('page_css')
    <link href="/html/main/assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="/html/main/assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
    <link href="/html/main/assets/css/clockpicker.min.css" rel="stylesheet" type="text/css">
@stop
@section('title', '予約の詳細 - マイページ')
@section('content')
    <main role="main" class="page">
        <div class="user-page" id="page-wrapper">
            <!-- Top content -->
            <div class="container">
                <div class="user-page-bg shadow">
                    <div class="row">
                        <div class="col-12">
                            <div class="current-reservation">
                                <h4 class="pb-3">予約内容の詳細</h4>
                                <div id="sp_res_status">
                                    <select class="selectpicker show-tick" title="予約状況">
                                        <option data-content="<span class='badge badge-temp-res'>仮予約（要連絡）</span>" value="/mypage/"></option>
                                        <option data-content="<span class='badge badge-waiting'>来店待ち</span>" value="/mypage/reservation-waiting"></option>
                                        <option data-content="<span class='badge badge-completed'>来店済み</span>" value="/mypage/completed-reservation"></option>
                                        <option data-content="<span class='badge badge-cancelled'>キャンセル済み</span>" value="/mypage/canceled-reservation"></option>
                                        <option data-content="<span class='badge badge-all-res'>全ての予約</span>" value="/mypage/reserve-history"></option>
                                    </select>
                                </div>
                                <ul class="nav nav-pills mb-5 user-nav-res-status">
                                    <li class="temp-res"><a href="/mypage/"><i class="fas fa-stopwatch"></i> 仮予約（要連絡）</a></li>
                                    <li class="waiting"><a href="/mypage/reservation-waiting"><i class="fas fa-user-clock"></i> 来店待ち</a></li>
                                    <li class="completed"><a href="/mypage/completed-reservation"><i class="fas fa-calendar-check"></i> 来店済み</a></li>
                                    <li class="cancelled"><a href="/mypage/canceled-reservation"><i class="fas fa-calendar-minus"></i> キャンセル済み</a></li>
                                    <li class="all-res"><a href="/mypage/reserve-history"><i class="fas fa-history"></i> 全ての予約</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('page_script')
<div class="reservation-popup modal fade" id="ReservationUpdateModalID" tabindex="-1" role="dialog" aria-labelledby="ReservationUpdateModalID" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="card-title h4 mb-2 font-weight-bold">予約の更新</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="reservation-dtls-popup pb-4">
                            <p class="font-weight-bold border-bottom">予約変更に関する情報</p>
                            <p class="font-weight-bold text-danger mb-1">※ 店舗を変更するには、この予約をキャンセルして、新たに予約を作成してください。</p>
                            <p class="font-weight-bold text-danger mb-1">※ 本予約は、日時の変更のみ可能です。変更後、オーナーが予約を確定します。</p>
                            <p class="font-weight-bold text-danger mb-3">※ 最新情報が必要な場合は、直接お店に電話することもできます。</p>
                            <div class="text-center pb-3">
                                <div class="shop-tel">
                                    TEL: <a href="tel:{{ $ar->shop->telephone }}"><i class="fas fa-phone"></i> {{ $ar->shop->telephone }} </a>
                                </div>
                            </div>
                            <form method="POST" name="update_cust_reservation" action="" accept-charset="UTF-8" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" data-toggle="tooltip" data-placement="top" title="お店を変えることはできません。">
                                            <input class="form-control" id="pac-inputs" value="{{$ar->shop->name}}" type="text" placeholder="{{$ar->shop->name}}." disabled>
                                            <input type="hidden" name="shop_id" id="shop_id" value="{{$ar->shop->id}}">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
{{--                                            @if($ar->menu_id !=0)--}}
                                            <div class="form-group" data-toggle="tooltip" data-placement="top" title="人の数を変えることはできません。">
                                            <select name="guest_num" class="selectpicker select-guest form-control form-select guest_num" aria-label="Default select" disabled  data-toggle="tooltip" data-placement="top" title="人の数は変えられない。">
                                                <option selected value="{{$ar->guest_num}}">{{$ar->guest_num}}</option>
                                            </select>
                                            </div>
{{--                                            @else--}}
{{--                                                <select class="selectpicker form-control form-select update_gust_num" data-dropup-auto="false" data-size="10" aria-label="Default select" name="guest_num">--}}
{{--                                                    @for ($i = 1; $i <= $ar->shop->max_capacity; $i++)--}}
{{--                                                        <option value="{{$i}}" {{$ar->guest_num === $i ? 'selected': ''}} >{{$i}}名様</option>--}}
{{--                                                    @endfor--}}
{{--                                                </select>--}}
{{--                                            @endif--}}
                                            <i class="fas fa-users"></i>
                                            <input type="hidden" id="guest_num" value="{{$ar->guest_num}}" name="guest_num">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="reserve_date" id="resrvCalendar" placeholder="{{$reservation_date}}" class="form-control dateselect" autocomplete="off" title="{{$reservation_date}}" data-control="datepicker">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <input type="hidden" name="reserve_date" id="reserve_date" value="{{date('Y-m-d', strtotime($ar->start_time))}}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select id="reservation_time" class="selectpicker form-control form-select update_time" aria-label="Default select" name="reserve_time" data-size="7" title="{{$time}}" data-width="100%">
                                                <option value="{{$ar->start_time}}">{{$ar->start_time}}</option>
                                            </select>
                                            <i class="far fa-clock"></i>
                                            <input type="hidden" name="updated_time" id="updated_time" value="{{$ar->start_time}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="update_reservation_dt" id="update_reservation_dt" value="{{$ar->start_time}}">
                                </div>
                                <!-- If there is reserved-menu -->
                                @if($ar->menu_id !=0)
                                <div class="row reserved-menu">
                                    <div class="col-md-12">
                                        <div class="food-menu-card p-0">
                                            <p class="font-weight-bold">※ 今回のご予約では、以下のコースメニューをお選びいただきました。</p>
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <article class="media shop-menu">

                                                        <!-- Article Image -->
                                                        <a href="#menuModalDefault" class="g-width-100" data-toggle="modal" data-target="#menuModalDefault">
                                                            <img class="img-fluid mr-4" width="80" src="/html/main/assets/images/table-0<?php echo rand(1,9)?>.jpg" alt="お席のみのご予約">
                                                            <!--<span class="caption text-uppercase font-weight-bold">マストトライ</span> -->
                                                        </a>
                                                        <!--Image -->
                                                        <!--Content -->
                                                        <div class="media-body align-self-center g-pl-10">
                                                            <a href="#menuModalDefault" class="nav-link p-0" data-toggle="modal" data-target="#menuModalDefault">
                                                                <div class="d-flex justify-content-between mb10">
                                                                    <h3 class="align-self-center mb0 h6 font400">
                                                                        {{$ar->menu->name}}</h3>

                                                                    <div class="align-self-center">
                                                                        <strong class="font700">{{number_format($ar->menu->price)}} 円</strong>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <p class="mb-0">{{$ar->menu->description}}</p>
                                                        </div>
                                                        <!--/Content -->
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- If there is reserved-menu !-->
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <button id="submit_btn"
                                                        type="submit"
                                                        class="btn btn-primary btn-block btn-lg"
                                                        data-attach-loading
                                                    >更新
                                                    </button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-outline-secondary btn-block btn-lg"
                                                        data-dismiss="modal" aria-label="Close"
                                                    >修正をキャンセル
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reservation-delete-popup modal fade" id="ReservationDeleteModalID" tabindex="-1" role="dialog" aria-labelledby="ReservationDeleteModalID" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="card-title h4 mb-2 font-weight-bold">予約の更新</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="reservation-delete-popup pb-4">
                            <h4 class="text-center">この予約をキャンセルしてよろしいですか？</h4>
                            <h5 class="pb-2">キャンセル理由:</h5>
                            <textarea class="form-control py-2" rows="2" id="cancel_reason" placeholder="キャンセルの理由（任意）"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="cancel_confirmed" data-attach-loading="">はい</button>
                    </div>
                    <div class="col-12 col-md-4">
                        <button type="button" class="btn btn-outline-secondary btn-block btn-lg" data-dismiss="modal" aria-label="Close">いいえ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reservation-delete-popup modal fade" id="AlertCanceled" tabindex="-1" role="dialog" aria-labelledby="AlertCanceled" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="card-title h4 mb-2 font-weight-bold">予約の更新</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="reservation-delete-popup pb-4">
                            <h4 class="text-center">予約がキャンセルされました。</h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <button id="closeModal" type="button" class="btn btn-secondary btn-block btn-lg" data-dismiss="modal" aria-label="Close">閉じる</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reservation-delete-popup modal fade" id="AlertProblem" tabindex="-1" role="dialog" aria-labelledby="AlertProblem" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="card-title h4 mb-2 font-weight-bold">予約の更新</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="reservation-delete-popup pb-4">
                            <h4 class="text-center">予約のキャンセルに問題があるようです。</h4>
                            <p>恐れ入りますが、直接店舗にご連絡くださいますようお願い申し上げます。</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <button type="button" class="btn btn-secondary btn-block btn-lg" data-dismiss="modal" aria-label="Close">閉じる</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/html/main/assets/js/bootstrap-select.min.js"></script>
<script src="/html/main/assets/js/bootstrap-datepicker.js"></script>
<script src="/html/main/assets/js/bootstrap-datepicker.ja.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script>
    $(function () {
        $("#submit_btn").prop('disabled', true);
        var updated_d = $("#reserve_date").val();
        var guest_num = $("#guest_num").val();
        var updated_dt;
        $('#resrvCalendar').datepicker({
            format: 'yyyy年mm月dd日 (D)',
            todayHighlight: true,
            language: 'ja',
            inline: false,
            orientation: "auto",
            autoclose:true,
        });

        $('#resrvCalendar').datepicker().on('changeDate', function(ev) {
            updated_d = moment(ev.date).format("YYYY-MM-DD");
            $("#reserve_date").val(updated_d);
            $('#reservation_time option').remove();
            update_time_series(ev.date, guest_num);
        });

        //update_gust_num
        $('.update_gust_num').change(function() {
            guest_num = $(this).val();
            $("#guest_num").val(guest_num);
            update_time_series(updated_d, guest_num);
            $("#submit_btn").prop('disabled', false);
            console.log($("#update_reservation_dt").val());
            console.log($("#guest_num").val());
        });
        $('#reservation_time').change(function() {
            var selectedTime = $(this).find('option:selected').map(function() {
                return $(this).text();
            }).get().join(',');
            updated_d = $("#reserve_date").val();
            updated_dt = updated_d + " " + selectedTime + ":00";
            $("#submit_btn").prop('disabled', false);
            $("#update_reservation_dt").val(updated_dt);
            $('#reservation_time').selectpicker('refresh');
        });
        // var cancel_rid = 0;
        var cancel_confirmation_button = $('#cancel_confirmed');
        cancel_confirmation_button.on('click', function () {
            //console.log('click');
            var cancel_rid = $('#cancel_rid').val();
            var cancel_reason = $('#cancel_reason').val();
            // todo
            $.ajax({
                url: "/api/cancel_reservation/" + cancel_rid,
                type: 'DELETE',
                timeout: 10000,  // milli-second
                data: { cancel_reason: cancel_reason },
                beforeSend: function (xhr, settings) {
                    cancel_confirmation_button.attr('disabled', true);
                },
                complete: function (xhr, textStatus) {
                    cancel_confirmation_button.attr('disabled', false);
                },
                success: function (result, textStatus, xhr) {

                    console.log(result['success']);
                    if (result['success'] === true) {
                        //alert("正常削除されました");
                        $("#AlertCanceled").modal();
                        $('#closeModal').click(function() {
                            location.reload();
                        });
                        //location.reload();
                    } else {
                        $("#AlertProblem").modal();
                        //alert(result['message']);
                    }
                },
                error: function (xhr, textStatus, error) {
                    console.log(error)
                    $("#AlertProblem").modal();
                    //alert('NG...');
                }
            });
            $("#ReservationDeleteModalID").modal('hide');
        });

        //update time
        update_time_series = function(updated_d, guest_num) {
            var date_str = updated_d.toLocaleString("ja-JP").split(' ')[0];
            var $form = $('#reservationForm');
            var shop_id = $('#shop_id').val();
            $('.time_label').remove();
            $('#reservation_time option').remove();
            //todo
            $.ajax({
                url: `/api/get_time_series?shop_id=${shop_id}&date=${date_str}&guest_num=${guest_num}`,
                type: 'GET',
                timeout: 10000, // milli-second
                beforeSend: function(xhr, settings) {},
                complete: function(xhr, textStatus) {},
                success: function(result, textStatus, xhr) {
                    if (result['success'] === true) {
                        //console.log(moment(i, "HH:mm"));
                        var times = result['available_times'];
                        times.sort(function (a, b) {
                            return new Date('1970/01/01 ' + a) - new Date('1970/01/01 ' + b);
                        });
                        //console.log(times);
                        if (times.length > 0) {
                            times.forEach(function(i, e) {
                                $("#reservation_time").append('<option value="' + i + '">' + i + '</option>');
                                $('#reservation_time').selectpicker('refresh');
                            });
                        } else {
                            $(".shop-resrv-time").append(`<label class="no-data">利用可能な時間帯がございません。</label>`);
                        }
                    } else {
                        //alert(result['message']);
                    }

                },
                error: function(xhr, textStatus, error) {
                    console.log(error)
                    //alert('NG...');
                }
            });
        };
        update_time_series(updated_d, guest_num);
    });
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@stop
