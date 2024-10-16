@extends('main.layouts.app')
@section('title', '仮予約（要連絡） - マイページ')
@section('content')
<section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>予約</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section data-bs-version="5.1" class="form03 reservation-menus cid-u74FbjrbCE" id="form03-10">
    <div class="user-page" id="page-wrapper">
        <!-- Top content -->
        <div class="container">
            <div class="user-page-bg shadow bg-white">
                <div class="row">
                    <div class="col-12">
                        <div class="p-4">
                            <h4 class="pb-3">現在の予約状況。</h4>
                            <?php $passedReservation = 0; $reservationStsMessage = '';?>
                            @foreach($single_reservation as $ar)
                                {{--@dd($single_reservation)--}}
                                    <?php $canceled = $ar->canceled;
                                    $stringdate = $ar->start_time;
                                    $timestemp = strtotime($stringdate);
                                    $created_at = date('Y-m-d H:i', strtotime($ar->created_at));
                                    $week = array( "日", "月", "火", "水", "木", "金", "土" );
                                    $week = $week[date("w", $timestemp)];
                                    $reservation_date = date('Y年m月d日', $timestemp)." (".$week.")";
                                    $time = date('H時i分',$timestemp);
                                    $payment_method = $ar->is_paid ? ($ar->is_point_used > 0 && $ar->billing_amount == 0 ? "ポイント全額利用" : "PayPal") : "座席のみ予約";
                                    ?>
                                <input type="hidden" id="cancel_rid" value="0">
                                <div class="reservation-status d-flex justify-content-between mb-5">
                                    <div class="reservation-status-left">
                                        <div class="res-num"> 予約番号 <strong>{{$ar->id}}</strong></div>
                                        <div class="res-sts">予約の状態 <strong>
                                                @if(getReservationStatusName($ar->status) == "仮予約（要連絡）") 仮予約（店舗からの連絡待ち） @else {{getReservationStatusName($ar->status)}}  @endif
                                            </strong></div>
                                    </div>
                                    <div class="reservation-status-right">
                                        @if($ar->status == 'paid_waiting' || $ar->status == 'paid_confirmed_waiting' || $ar->status == 'unpaid_waiting' || $ar->status == 'unpaid_confirmed_waiting' || $ar->status == 'paid_created' || $ar->status == 'unpaid_created' )
                                            <button class="btn btn-outline-info mb-2" data-toggle="modal" onclick="$('#edit_rid').val({{$ar->id}})" data-target="#ReservationUpdateModalID">修正する</button>
                                            <button class="btn btn-danger mb-2" data-toggle="modal" onclick="$('#cancel_rid').val({{$ar->id}})" data-target="#ReservationDeleteModalID">今すぐキャンセルする</button>
                                        @else
                                            <button class="btn btn-outline-info disabled mb-2  btn-sm">修正する</button>
                                            <button class="btn btn-danger disabled mb-2  btn-sm">今すぐキャンセルする</button>
                                        @endif
                                            @if($invoice && $invoice->pdf_url)
                                                <a href="{{url('/storage/'.$invoice->pdf_url)}}" class="btn btn-info btn-sm">請求書のダウンロード</a>
                                            @endif
                                    </div>
                                </div>
                                <div class="reservation-card">
                                    <div class="shop-thumb <?php if($canceled == 1) { echo "cancelled";}?>">
                                        {{--                                            <img src="{{$ar->shop->MainImagePath}}" alt="{{$ar->shop->name}}">--}}
                                    </div>
                                    <div class="shop-res-dtl">
                                        <table class="table">
                                            <tr>
                                                <td class="border-top-0"><i class="fas fa-store"></i> <a href="/shops/{{$ar->shop->id}}" class="shop-link" target="_blank"> {{$ar->shop->name}}</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i> <a class="shop-add" href="http://maps.google.com/?q={{$ar->shop->FullAddress}}" target="_blank">{{$ar->shop->FullAddress}}</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-phone-volume"></i> <a class="shop-tel" href="tel:{{$ar->shop->telephone}}" target="_blank"> {{ $ar->shop->telephone }}</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="far fa-calendar-check"></i>予約日: <b>{{ $reservation_date }}</b></td>
                                            </tr>
                                            <tr>
                                                <td><i class="far fa-clock"></i>予約時間: <b>{{ $time }}</b></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-users"></i> <b>{{$ar->guest_num}}名様</b></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="reservation-Detail-Data-Box">
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">ご予約プラン</dt>
                                        <dd class="reservation-Detail-Data-Dd">{{ $ar->menu->name ?? 'メニューなし' }}</dd>
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt"> 料金 </dt>
                                        <dd class="reservation-Detail-Data-Dd">
                                            <div>
                                                <span class="reservation-Detail-Data-Price">{{number_format($ar->billing_amount)}} 円</span>
                                                <dl class="reservation-Detail-Data-Price-Detail p-0">
                                                    <dt class="reservation-Detail-Data-Child-Dt">プラン料金</dt>
                                                    <dd class="reservation-Detail-Data-Child-Dd-Multiple">
                                                        <span class="reservation-Detail-Data-Child-Summary">{{ $ar->menu->price ?? '0' }}円 × {{$ar->guest_num}}名</span> =
                                                        <span class="reservation-Detail-Data-Price-Detail-Price">{{number_format(($ar->menu->price ?? '0') * ($ar->guest_num))}}円</span>
                                                    </dd>
                                                </dl>
                                                @if($ar->menu_id != 0)
                                                    <dl class="reservation-Detail-Data-Price-Detail m-0 p-0">
                                                        <dt class="reservation-Detail-Data-Child-Dt"></dt>
                                                        <dd class="reservation-Detail-Data-Child-Dd-Multiple">
                                                            <span class="reservation-Detail-Data-Child-Summary">使用ポイント</span>
                                                            <span class="reservation-Detail-Data-Price-Detail-Price text-info">-{{$ar->is_point_used}}</span>
                                                        </dd>
                                                    </dl>
                                                @endif
                                                <dl class="reservation-Detail-Data-Price-Detail m-0 p-0">
                                                    <dt class="reservation-Detail-Data-Child-Dt"></dt>
                                                    <dd class="reservation-Detail-Data-Child-Dd-Multiple">
                                                        <span class="reservation-Detail-Data-Child-Summary font-weight-bold">合計金額</span>
                                                        <span class="reservation-Detail-Data-Price-Detail-Price text-danger">{{number_format($ar->billing_amount)}}円</span>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </dd>
                                    </dl>

                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">獲得ポイント</dt>
                                        <dd class="reservation-Detail-Data-Dd text-danger">{{ (int)round(($ar->billing_amount) * 0.01 + 50)}} 獲得したポイント <br>
                                            <span class="text-dark small">(ポイント履歴は<a href="/mypage/point_history">こちら</a>からご覧いただけます。)</span></dd>
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">お支払い方法</dt>
                                        <dd class="reservation-Detail-Data-Dd">{{ $payment_method }} </dd> {{--needs improvement--}}
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">確認事項</dt>
                                        <dd class="reservation-Detail-Data-Dd">
                                            <div><span class="reservation-Detail-Data-Dd-Q">Q</span>ご要望・その他</div>
                                            <div class="reservation-Detail-Data-Dd-A">
                                                {{ $ar->memo ?? '- なし' }}
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">ご来店者</dt>
                                        <dd class="reservation-Detail-Data-Dd">
                                            {{$ar->customer->full_name}} （{{$ar->customer->last_name}} {{$ar->customer->first_name}}）様
                                            <br><span class="reservation-Detail-Data-Tel">{{$ar->customer->telephone}}</span>
                                        </dd>
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">キャンセルポリシー</dt>
                                        <dd class="reservation-Detail-Data-Dd">
                                            <pre class="reservation-Detail-Data-Pre">{{$ar->shop->cancellation_policy}}</pre>
                                                <?php if($canceled == 1 || $passedReservation == 1 || $ar->status == 'finished') {?>
                                            <button class="btn btn-danger disabled">すぐにキャンセル</button>
                                            <?php } else { ?>
                                            <button class="btn btn-danger" data-toggle="modal" onclick="$('#cancel_rid').val({{$ar->id}})" data-target="#ReservationDeleteModalID">今すぐキャンセルする</button>
                                            <?php } ?>

                                        </dd>
                                    </dl>
                                    <dl class="reservation-Detail-Data">
                                        <dt class="reservation-Detail-Data-Dt">注意事項</dt>
                                        <dd class="reservation-Detail-Data-Dd">
                                            {!! nl2br($ar->shop->precautions) !!}
                                        </dd>
                                    </dl>
                                </div>
                                <div class="text-center">
                                    <a href="/mypage/" class="btn btn-outline-primary">予約一覧に戻る</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{asset('/html/main/assets/bootstrap/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('/html/main/assets/bootstrap/js/bootstrap-datepicker.ja.min.js')}}"></script>
        <script src="{{asset('/assets/js/moment.min.js')}}"></script>
        <script src="{{asset('/assets/js/moment-with-locales.js')}}"></script>
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