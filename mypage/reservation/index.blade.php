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
                            <nav class="mypage-tab">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="res-temp-tab" data-bs-toggle="tab" data-bs-target="#res-temp" type="button" role="tab" aria-controls="res-temp" aria-selected="true">仮予約（要連絡）</button>
                                    <button class="nav-link" id="res-waiting-tab" data-bs-toggle="tab" data-bs-target="#res-waiting" type="button" role="tab" aria-controls="res-waiting" aria-selected="false">来店待ち</button>
                                    <button class="nav-link" id="res-completed-tab" data-bs-toggle="tab" data-bs-target="#res-completed" type="button" role="tab" aria-controls="res-completed" aria-selected="false">来店済み</button>
                                    <button class="nav-link" id="res-cancelled-tab" data-bs-toggle="tab" data-bs-target="#res-cancelled" type="button" role="tab" aria-controls="res-cancelled" aria-selected="false">キャンセル済み</button>
                                    <button class="nav-link" id="res-all-tab" data-bs-toggle="tab" data-bs-target="#res-all" type="button" role="tab" aria-controls="res-all" aria-selected="false">全ての予約</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="res-temp" role="tabpanel" aria-labelledby="res-temp-tab">
                                    @include('main.mypage.reservation.reservation_card', ['reservations' => $active_reservations])
                                </div>
                                <div class="tab-pane fade" id="res-waiting" role="tabpanel" aria-labelledby="res-waiting-tab">
                                    @include('main.mypage.reservation.reservation_card', ['reservations' => $waiting_reservations])
                                </div>
                                <div class="tab-pane fade" id="res-completed" role="tabpanel" aria-labelledby="res-completed-tab">
                                    @include('main.mypage.reservation.reservation_card', ['reservations' => $completed_reservations])
                                </div>
                                <div class="tab-pane fade" id="res-cancelled" role="tabpanel" aria-labelledby="res-cancelled-tab">
                                    @include('main.mypage.reservation.reservation_card', ['reservations' => $canceled_reservations])
                                </div>
                                <div class="tab-pane fade" id="res-all" role="tabpanel" aria-labelledby="res-all-tab">
                                    @include('main.mypage.reservation.reservation_card', ['reservations' => $active_reservations->concat($waiting_reservations)->concat($completed_reservations)->concat($canceled_reservations)])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
