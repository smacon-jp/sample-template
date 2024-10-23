@extends('main.mypage.layout.app')
    
@section('content')
<div class="profile-menu-content">
    <div id="sidebar-content" class="profile-menu-content__wrap">
      <div class="profile-menu-content__wrap-in">
        <div class="profile-menu__title d-flex align-items-center gap-5">
          <span
            id="proj-sidebar-preview-phone"
            class="img-wrap profile-menu-img profile-menu-preview-btn--phone"
          >
            <img src="{{ asset('my-page/images/icons/icon-menu.svg') }}" alt="icon" />
          </span>
          <span
            id="proj-sidebar-preview"
            class="img-wrap profile-menu-img profile-menu-preview-btn"
          >
            <img src="{{ asset('my-page/images/icons/icon-menu.svg') }}" alt="icon" />
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
            注文履歴
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
                    <span class="list-card__filter__btn-text"
                      >ステータス</span
                    >
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
              <h5
                class="text-size-22 fw-semibold text-grayishBlue400 mt-1 mt-sm-0"
              >
                最近
              </h5>
              @foreach ($orders as $order)
              <div class="card-light list-card">
                <div class="list-card__in list-card__in--mod2">
                  <div
                    class="list-card__details-wrap list-card__details-wrap--details"
                  >
                    <div class="row">
                      <div class="col-12 col-xl-9 col-xxl-9 col">
                        <div class="list-card__imgDetailGrid">
                          <div
                            class="list-card__imgDetailGrid__img position-relative"
                          >
                            <div class="list-card__imgDetailGrid__in"></div>
                          </div>
                          <div
                            class="list-card__details list-card__imgDetailGrid__details d-flex flex-column"
                          >
                            <h4
                              class="list-card__title list-card__title--mod"
                            >
                              商品名＃{{ $order->id }}
                            </h4>
                            <ul
                              class="list-card__details__wrap flex-column d-flex"
                            >
                              <li
                                class="list-card__details__li d-flex justify-content-between align-items-center"
                              >
                                <span
                                  class="list-card__details__label text-gra"
                                  >注文番号</span
                                ><span class="list-card__details__value"
                                  >{{ $order->id }}</span
                                >
                              </li>

                              <li
                                class="list-card__details__li d-flex justify-content-between align-items-center"
                              >
                                <span
                                  class="list-card__details__label text-gra"
                                  >購入日</span
                                ><span class="list-card__details__value"
                                  >{{ $order->order_date }}</span
                                >
                              </li>

                              <li
                                class="list-card__details__li d-flex justify-content-between align-items-center"
                              >
                                <span
                                  class="list-card__details__label list-card__details__label--red text-gra"
                                  >合計金額：</span
                                ><span
                                  class="list-card__details__value list-card__details__value--red"
                                  >¥{{ $order->order_total }}</span
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div
                        class="col-12 col-xl-3 col-xxl-3 col h-inherit d-flex align-items-end list-card__payment-details justify-content-between justify-content-xl-end"
                      >
                        <div class="d-flex aign-items-center">
                          <div
                            
                            class="list-card__details__value list-card__details__value--blue-2 fw-medium d-flex align-items-center gap-2 list-card__link-green"
                          >
                            {{-- <span class="inline-flex img-wrap img-28">
                              <img
                                src="/images/icons/icon-circle-check.svg"
                                alt="icon"
                              />
                            </span>

                            <span
                              class="d-flex list-card__details__value list-card__details__value--blue-2 fw-medium"
                            >
                              配達済み
                            </span> --}}
                          </div>
                        </div>
                        <a
                          href="#"
                          class="list-card__subactions d-flex d-xl-none gap-2 align-items-center"
                        >
                          <span
                            class="d-flex list-card__subactions__icon align-items-center justify-content-center"
                          >
                            <img
                              src="/images/icons/icon-re.svg"
                              alt="icon"
                            />
                          </span>
                          <span
                            class="list-card__details__value list-card__details__value--blue"
                            >再び購入</span
                          >
                        </a>
                      </div>
                    </div>
                  </div>

                  {{-- <a
                    href="#"
                    class="list-card__subactions d-none d-xl-flex gap-2 align-items-center"
                  >
                    <span
                      class="d-flex list-card__subactions__icon align-items-center justify-content-center"
                    >
                      <img src="/images/icons/icon-re.svg" alt="icon" />
                    </span>
                    <span
                      class="list-card__details__value list-card__details__value--blue"
                      >再び購入</span
                    >
                  </a> --}}
                </div>
                <div
                  class="list-card__footer d-flex justify-content-center"
                >
                  <a href="#" class="list-card__footer__link">
                    詳細を見る
                  </a>
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

