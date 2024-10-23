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
            <img src="{{ ('my-page/images/icons/icon-menu.svg') }}" alt="icon"/>
          </span>
          <span
            id="proj-sidebar-preview"
            class="img-wrap profile-menu-img profile-menu-preview-btn"
          >
            <img src="{{ ('my-page/images/icons/icon-menu.svg')}}" alt="icon"/>
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">お知らせ</h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="profile-menu-content__section d-flex flex-column gap-3 gap-md-4">
            <div
              class="profiile-menu-content__section-in d-flex flex-column gap-4 gap-md-5"
            >
              <h5 class="text-size-22 fw-semibold text-grayishBlue400 mt-1 mt-sm-0">
                最近
              </h5>

              <ul
                class="notice-list d-flex flex-column gap-2 list-unstyled"
              >
                @foreach ($notices as $notice)
                <li class="notice-list__li">
                  <div class="notice-list__img"></div>

                  <div class="notice-list__details-wrap">
                    <div class="notice-list__top d-flex align-items-center flex-wrap gap-2                    ">
                      <div
                        class="notice-list__top-left d-flex flex-sm-row flex-column align-items-sm-center gap-3"
                      >
                        <span class="block notice-list__tag text-white order-2 order-sm-1">
                          重要
                        </span>
                        <span
                          class="text-size-22 text-grayishBlue400 d-flex fw-semibold order-1 order-sm-2"
                          >ご予約のキャンセルのお知らせ</span
                        >
                      </div>
                      <div
                        class="notice-list__top-right flex-grow-1 d-sm-flex justify-content-end d-none"
                      >
                        <span
                          class="d-inline-flex text-size-18 text-grayishBlue100-light"
                          >{{ $notice->canceled_at }}</span
                        >
                      </div>
                    </div>
                    <p class="text-size-20 fw-normal text-grayishBlue400">
                      お客様のご予約がキャンセルされました。詳しくはマイページよりご確認ください。
                    </p>
                    <p class="text-size-16 fw-normal text-grayishBlue400">
                      {{ $notice->cancel_reason }}
                    </p>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

