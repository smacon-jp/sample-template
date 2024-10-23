@extends('main.mypage.layout.app')

@section('content')

<div class="profile-menu-content">
    <div id="sidebar-content" class="profile-menu-content__wrap">
      <div class="profile-menu-content__wrap-in">
        <div
          class="profile-menu__title d-flex d-xl-none align-items-center gap-5"
        >
          <span
            id="proj-sidebar-preview-phone"
            class="img-wrap profile-menu-img profile-menu-preview-btn--phone"
          >
            <img src="{{ asset('my-page/images/icons/icon-menu.svg') }}" alt="icon"/>
          </span>
          <span
            id="proj-sidebar-preview"
            class="img-wrap profile-menu-img profile-menu-preview-btn"
          >
            <img src="{{ asset('my-page/images/icons/icon-menu.svg') }}" alt="icon"/>
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold">予約詳細</h4>
        </div>
        <div class="profile-menu-content__wrapcontent mt-xl-0">
         
          <div class="list-card__main-section d-flex flex-column">
            <div
              class="list-card__info-section list-card__info-section--details d-flex flex-column"
            >
              <div class="mt-1 mt-sm-0">
                <a
                  href="/mypage/reservation-status"
                  class="align-items-center gap-2 d-flex cs-opacity"
                >
                  <span class="block img-wrap img-24">
                    <img
                      src="{{ asset('my-page/images/icons/icons-arrow-back.svg') }}"
                      alt="icon"
                    />
                  </span>
                  <span class="text-size-22 fw-semibold text-grayishBlue400"
                    >戻る</span
                  >
                </a>
              </div>

              <div
                class="card-light list-card list-card--details"
              >
                <div
                  class="list-card__in list-card__in--details"
                >
                  <h4
                    class="list-card__title list-card__title--details"
                  >
                    予約サービス名＃{{ $reservation->id }}
                  </h4>

                  <div
                    class="list-card__details-wrap list-card__details-wrap--details"
                  >
                    <div class="row">
                      <div class="col-12 col-md-9 col">
                        <div
                          class="list-card__details d-flex flex-column"
                        >
                          <ul
                            class="list-card__details__wrap flex-column d-flex"
                          >
                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-start"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >店舗名</span
                              >
                              <div
                                class="list-card__details__value d-flex flex-column align-items-end gap-1"
                              >
                                <span class="d-inline-block cs-w-max"
                                  >お店の名前</span
                                >

                                <span class="d-inline-block cs-w-max"
                                  >{{ $reservation->shop->name }}</span
                                >
                              </div>
                            </li>
                          </ul>

                          <ul
                            class="list-card__details__wrap flex-column d-flex"
                          >
                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >TEL</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->shop->telephone }}</span
                              >
                            </li>
                          </ul>

                          <ul
                            class="list-card__details__wrap flex-column d-flex"
                          >
                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >予約番号</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->id }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >予約日</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->created_at->format('M d, Y') }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >予約時間</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->created_at->format('H;i') }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >ご予約プラン</span
                              ><span
                                class="list-card__details__value"
                                >パーティコース</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >お客様</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->guest_num }}名</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >お支払い方法</span
                              ><span
                                class="list-card__details__value"
                                >クレジットカード</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >確認事項</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->memo }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >ご来店者</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->customer->first_name . ' ' . $reservation->customer->last_name}} </span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >電話番号</span
                              ><span
                                class="list-card__details__value"
                                >{{ $reservation->customer->telephone }}</span
                              >
                            </li>
                          </ul>

                          <ul
                            class="list-card__details__wrap list-card__details__wrap--mod flex-column d-flex"
                          >
                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label list-card__details__label--black fw-semibold"
                              >
                                料金</span
                              ><span
                                class="list-card__details__value list-card__details__value--black fw-semibold"
                              >
                                {{ $reservation->billing_amount }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label list-card__details__label--blue fw-medium"
                              >
                                獲得ポイント</span
                              ><span
                                class="list-card__details__value list-card__details__value--blue fw-medium"
                              >
                                {{ $reservation->is_point_used }} P</span
                              >
                            </li>

                            <li
                              class="list-card__details__li list-card__details__li--confirm d-none d-md-flex justify-content-end align-items-center"
                            >
                              <a
                                href="#"
                                class="list-card__details__value list-card__details__value--blue-2 fw-medium d-flex align-items-center gap-2 list-card__link-green"
                              >
                                <span class="inline-flex img-wrap img-28">
                                  <img
                                    src="{{ asset('my-page/images/icons/icon-circle-check.svg') }}"
                                    alt="icon"
                                  />
                                </span>

                                <span
                                  class="d-flex list-card__details__value list-card__details__value--blue-2 fw-medium"
                                >
                                  確定済み
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="col-md-3 col-12 col h-inherit d-flex align-items-center list-card__details__total justify-content-start justify-content-md-end"
                      >
                        <a
                          href="#"
                          class="list-card__details__value list-card__details__value--link list-card__details__value--blue-2 fw-medium d-flex align-items-center gap-2 d-md-none flex-grow-1 justify-content-center list-card__link-green"
                        >
                          <span class="inline-flex img-wrap img-28">
                            <img
                              src="{{ asset('my-page/images/icons/icon-circle-check.svg') }}"
                              alt="icon"
                            />
                          </span>

                          <span
                            class="d-flex list-card__details__value list-card__details__value--blue-2 fw-medium"
                          >
                            確定済み
                          </span>
                        </a>
                        <div
                          class="flex-md-grow-0 flex-grow-1 justify-content-center justify-content-md-start list-card__details d-flex flex-column"
                        >
                        <a class="list-card__details__value list-card__details__value--link list-card__details__value--red fw-medium cs-link-red d-flex justify-content-center justify-content-md-start"
                        data-bs-toggle="modal" data-bs-target="#cancelModal{{ $reservation->id }}">
                        キャンセル
                      </a>
                        </div>
                      </div>

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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
