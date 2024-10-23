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
            お支払い履歴
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

              @foreach ($purchased_history as $purchased)
              <div class="card-light list-card">
                <div class="list-card__in list-card__in--mod">
                  <h4 class="list-card__title">{{ $purchased->created_at->format('M d, Y') }}</h4>

                  <div class="list-card__details-wrap">
                    <div class="row">
                      <div class="col-12 col-md-6 col">
                        <div class="list-card__details d-flex flex-column">
                          <ul
                            class="list-card__details__wrap flex-column d-flex"
                          >
                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label text-gra"
                                >請求番号</span
                              ><span class="list-card__details__value"
                                >{{ $purchased->telephone }}</span
                              >
                            </li>

                            <li
                              class="list-card__details__li d-flex justify-content-between align-items-center"
                            >
                              <span
                                class="list-card__details__label list-card__details__label--red text-gra"
                                >合計金額</span
                              ><span
                                class="list-card__details__value list-card__details__value--red"
                                >¥{{ $purchased->total }}</span
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="col-md-6 col-12 col h-inherit d-flex align-items-center list-card__details__total justify-content-between justify-content-md-end"
                      >
                        <span
                          class="list-card__details__label d-block d-md-none"
                          >請求番号</span
                        >

                        <div
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="list-card__footer d-flex justify-content-center"
                >
                  {{-- <a href="#" class="list-card__footer__link">
                    詳細を見る
                  </a> --}}
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

