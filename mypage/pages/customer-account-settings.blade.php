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
            <img src="{{ asset('my-page/images/icons/icon-menu.svg')}}" alt="icon"/>
          </span>
          <span
            id="proj-sidebar-preview"
            class="img-wrap profile-menu-img profile-menu-preview-btn"
          >
            <img src="{{ asset('my-page/images/icons/icon-menu.svg')}}" alt="icon"/>
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
            アカウント設定
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="acc-settings__img-mobile d-block d-sm-none">

          </div>
          <h5 class="d-flex d-sm-none acc-settings__mobile-title fw-bold">
            アカウント
          </h5>
          <div class="card-light acc-settings">
            <ul class="acc-settings__ul list-unstyled">
              <li class="acc-settings__li">
                <a
                  href="customer-profile-settings"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title">プロフィール設定</span>
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                      src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                      alt="icon"
                      class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>

              <li class="acc-settings__li">
                <a
                  href="#"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title">言語変更</span>
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                        src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                        alt="icon"
                        class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>

              <li class="acc-settings__li">
                <a
                  href="account-password-change"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title">パスワード変更</span>
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                        src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                        alt="icon"
                        class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>

              <li class="acc-settings__li">
                <a
                  href="#"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title"
                    >お支払い方法の変更</span
                  >
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                                           src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                      alt="icon"
                      class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>

              <li class="acc-settings__li">
                <a
                  href="#"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title">言語変更</span>
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                        src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                        alt="icon"
                        class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>

              <li class="acc-settings__li">
                <a
                  href="#"
                  class="acc-settings__link d-flex align-items-center justify-content-between"
                >
                  <span class="acc-settings__title">その他設定</span>
                  <span class="inline-flex img-wrap img-20 cs-transition-4">
                    <img
                      src="{{ asset('my-page/images/icons/icon-chevrom-right.svg')}}"
                      alt="icon"
                      class="cs-transition-4"
                    />
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

