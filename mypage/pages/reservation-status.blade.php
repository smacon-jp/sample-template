@extends('main.mypage.layout.app')

@section('content')
<div class="profile-menu-content">
    <div id="sidebar-content" class="profile-menu-content__wrap">
      <div class="profile-menu-content__wrap-in">
        <div class="profile-menu__title d-flex align-items-center gap-5">
          <span id="proj-sidebar-preview-phone" class="img-wrap profile-menu-img profile-menu-preview-btn--phone">
            <img src="{{ asset('my-page/images/icons/icon-menu.svg') }}" alt="icon" />
          </span>
          <span id="proj-sidebar-preview" class="img-wrap profile-menu-img profile-menu-preview-btn">
            <img src="{{ asset('/images/icons/icon-menu.svg') }}" alt="icon" />
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
            予約状況 / 予約履歴
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="list-card__filter">
            <div class="list-card__filter__in d-flex flex-column">
              <h5 class="list-card__filter__title">絞り込み</h5>
              <div class="row list-card__filter__btn-grp">
                <div class="col-4 col">
                  <button type="button" class="list-card__filter__btn">
                    <span class="list-card__filter__btn-text">期間</span>
                  </button>
                </div>
                <div class="col-4 col">
                  <button type="button" class="list-card__filter__btn">
                    <span class="list-card__filter__btn-text">ステータス</span>
                  </button>
                </div>
                <div class="col-4 col">
                  <button type="button" class="list-card__filter__btn">
                    <span class="list-card__filter__btn-text">金額</span>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="list-card__main-section d-flex flex-column">
            <div class="list-card__info-section d-flex flex-column">
              <h5 class="text-size-22 fw-semibold text-grayishBlue400 mt-1 mt-sm-0">最近</h5>

              @foreach ($reservations as $reservation)
              <div class="card-light list-card">
                <div class="list-card__in">
                  <h4 class="list-card__title">予約サービス名＃{{ $reservation->id }}</h4>
                  <div class="list-card__details-wrap">
                    <div class="row">
                      <div class="col-12 col-md-9 col">
                        <div class="list-card__details d-flex flex-column">
                          <ul class="list-card__details__wrap flex-column d-flex">
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label text-gra">予約番号</span>
                              <span class="list-card__details__value">{{ $reservation->id }}</span>
                            </li>
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label text-gra">予約日</span>
                              <span class="list-card__details__value">{{ $reservation->created_at->format('M d, Y') }}</span>
                            </li>
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label text-gra">予約時間</span>
                              <span class="list-card__details__value">{{ $reservation->created_at->format('H:i') }}</span>
                            </li>
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label text-gra">ご予約プラン</span>
                              <span class="list-card__details__value">パーティコース</span>
                            </li>
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label text-gra">お客様</span>
                              <span class="list-card__details__value">{{ $reservation->guest_num }}名</span>
                            </li>
                          </ul>
                          <ul class="list-card__details__wrap list-card__details__wrap--mod flex-column d-flex">
                            <li class="list-card__details__li d-flex justify-content-between align-items-center">
                              <span class="list-card__details__label list-card__details__label--black fw-semibold">
                                料金</span>
                              <span class="list-card__details__value list-card__details__value--black fw-semibold">
                                ¥{{ $reservation->billing_amount }}</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-3 col-12 col h-inherit d-flex align-items-center list-card__details__total justify-content-start justify-content-md-end">
                        <a class="list-card__details__value list-card__details__value--link list-card__details__value--red fw-medium cs-link-red d-flex justify-content-center justify-content-md-start"
                          data-bs-toggle="modal" data-bs-target="#cancelModal{{ $reservation->id }}">
                          キャンセル
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-card__footer d-flex justify-content-center">
                  <a href="{{ url('/reservation/'.$reservation->id.'/show') }}" class="list-card__footer__link">詳細を見る</a>
                </div>
              </div>

              <!-- Cancel Modal -->
              <div class="modal fade" id="cancelModal{{ $reservation->id }}" tabindex="-1" aria-labelledby="cancelModalLabel{{ $reservation->id }}" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cancelModalLabel{{ $reservation->id }}">キャンセルの確認</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      本当にこの予約をキャンセルしますか？
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">いいえ</button>
                      <form action="{{ url('/reservation/'. $reservation->id .'/cancel') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">はい、キャンセルする</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
