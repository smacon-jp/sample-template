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
            <img src="{{ asset('my-page/images/icons/icon-menu.svg')}}" alt="icon" />
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
            アカウント設定
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="profile-settings">
            <div class="profile-settings__wrap d-flex flex-column">
              <div class="profile-settings__section">
                <h5 class="d-flex profile-settings__section-title fw-bold">
                  プロフィール
                </h5>
                <div class="card-light acc-settings">
                  <ul class="acc-settings__ul list-unstyled">
                    <li class="acc-settings__li">
                      <a
                        href="customer-profile-edit-settings"
                        class="acc-settings__link d-flex align-items-center justify-content-between"
                      >
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >お客様情報の変更</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >通知設定</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >住所を変更</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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

              <div class="profile-settings__section">
                <h5 class="d-flex profile-settings__section-title fw-bold">
                  サポート
                </h5>
                <div class="card-light acc-settings">
                  <ul class="acc-settings__ul list-unstyled">
                    <li class="acc-settings__li">
                      <a
                        href="#"
                        class="acc-settings__link d-flex align-items-center justify-content-between"
                      >
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >特定商取引法に基づく表示</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >プライバシーポリシー</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >利用契約</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >会社情報</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >お問い合わせ</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
                        href="/"
                        class="acc-settings__link d-flex align-items-center justify-content-between"
                      >
                        <span
                          class="acc-settings__title acc-settings__title--sm"
                          >ログアウト</span
                        >
                        <span
                          class="inline-flex img-wrap img-20 cs-transition-4"
                        >
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
      </div>
    </div>
  </div>
@endsection

