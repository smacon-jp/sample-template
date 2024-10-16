<input type="hidden" id="cancel_rid" value="0">
@forelse($reservations as $ar)
        <?php $stringdate = $ar->start_time;
        $timestemp = strtotime($stringdate);
        $week = array( "日", "月", "火", "水", "木", "金", "土" );
        $week = $week[date("w", $timestemp)];
        $reservation_date = date('Y年m月d日', $timestemp)." (".$week.")";
        $time = date('H時i分',$timestemp);
        $invoice = \App\Models\Invoice::where('reservation_id', $ar->id)->first();
        ?>
    <div class="reservation-card bg-light mb-5">
        <div class="shop-res-dtl">
            <table class="table border">
                <tr>
                    <td class="border-top-0" colspan="2"><i class="fas fa-lightbulb"></i>予約番号: <strong>{{$ar->id}}</strong></td>
                </tr>
                <tr>
                    <td><i class="fas fa-store"></i> {{$ar->shop->name}}</td>
                    <td><i class="fas fa-phone-volume"></i> <a class="shop-tel" href="tel:{{$ar->shop->telephone}}" target="_blank"> {{ $ar->shop->telephone }}</a></td>

                </tr>
                <tr>
                    <td colspan="2"><i class="fas fa-map-marker-alt"></i> <a class="shop-add" href="http://maps.google.com/?q={{$ar->shop->FullAddress}}" target="_blank">{{$ar->shop->FullAddress}}</a></td>
                </tr>
                <tr>
                    <td><i class="far fa-calendar-check"></i>予約日: <b>{{ $reservation_date }}</b></td>
                    <td><i class="far fa-clock"></i>予約時間: <b>{{ $time }}</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-utensils"></i> <b>{{ $ar->menu->name ?? 'メニューなし' }}</b></td>
                    <td><i class="fas fa-users"></i> <b>{{$ar->guest_num}}名様</b></td>
                </tr>
                <tr>
                    <td>@if($invoice && $invoice->pdf_url)<a href="{{url('/storage/'.$invoice->pdf_url)}}" class="btn btn-primary btn-sm">請求書のダウンロード</a> @else &nbsp; @endif</td>
                    <td class="resmore-detail" align="right">
                        <a class="btn btn-warning btn-sm" href="/mypage/reservation-detail/{{$ar->id}}" role="button">予約詳細をみる</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@empty
    <p>最近の予約はありません。</p>
@endforelse