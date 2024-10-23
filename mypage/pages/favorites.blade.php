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
            <img src="/images/icons/icon-menu.svg" alt="icon" />
          </span>
          <span
            id="proj-sidebar-preview"
            class="img-wrap profile-menu-img profile-menu-preview-btn"
          >
            <img src="/images/icons/icon-menu.svg" alt="icon" />
          </span>
          <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
            お気に入り
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <ul
            class="cs-card-wrap cs-card-wrap--gap10 d-flex flex-column list-unstyled"
          >
            <li class="cs-card cs-card--grid cs-card--favorites card-light">
              <div class="cs-card__fav-img position-relative">
                <div class="cs-card__fav-img-container"></div>
              </div>
              <div class="cs-card__fav-details">
                <div
                  class="cs-card__fav-details__title d-flex justify-content-between align-items-center"
                >
                  <h3 class="cs-card__title">商品名 ＃123</h3>
                  <button
                    class="block img-wrap img-28 cs-icon-button cs-icon-button--dark"
                  >
                    <img src="/images/icons/icon-delete.svg" alt="icon" />
                  </button>
                </div>

                <div class="cs-card__fav-details__desc d-flex flex-column">
                  <div class="d-flex gap-1">
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      詳細：
                    </span>
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      商品の詳細や説明
                    </span>
                  </div>

                  <div class="d-flex gap-1">
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      サイズ：
                    </span>
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      スタンダード
                    </span>
                  </div>
                </div>

                <div
                  class="cs-card__fav-details__price d-flex justify-content-between align-items-center"
                >
                  <h6
                    class="cs-card__fav-details__priceamt text-primary-brand d-flex align-items-center gap-2 gap-md-3"
                  >
                    ¥12,600
                    <span
                      class="cs-card__sub-details text-grayishBlue500 cs-card__body17"
                    >
                      (税込)
                    </span>
                  </h6>
                  <button class="block cs-icon-button cs-icon-button--fav">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 36 36"
                      fill="none"
                      class="img-28"
                    >
                      <path
                        d="M10.2475 3.5001H10.25C12.3504 3.5001 14.2988 4.67024 15.7606 5.90558C16.4841 6.51698 17.0709 7.12961 17.4767 7.58947C17.6793 7.81907 17.836 8.00971 17.9412 8.1419C17.9939 8.20797 18.0336 8.25937 18.0597 8.29365L18.0886 8.3319L18.0952 8.34081L18.0965 8.3426L18.0967 8.34277L18.0967 8.34283L18.5 8.89378L18.9033 8.34283L18.9033 8.34277L18.9035 8.3426L18.9048 8.34081L18.9114 8.3319L18.9403 8.29365C18.9664 8.25937 19.0061 8.20797 19.0588 8.1419C19.164 8.00971 19.3207 7.81907 19.5233 7.58947C19.9291 7.12961 20.5159 6.51698 21.2394 5.90558C22.7012 4.67024 24.6496 3.5001 26.75 3.50011L26.7525 3.5001C28.7935 3.48972 30.757 4.30617 32.2106 5.77311C33.6642 7.24004 34.4888 9.23747 34.5 11.3268C34.4999 13.1137 34.154 16.1572 32.0665 19.8496C29.9773 23.5451 26.1284 27.9174 19.0802 32.3342C18.9046 32.443 18.7039 32.5 18.5 32.5C18.2961 32.5 18.0954 32.443 17.9198 32.3342C10.8716 27.9165 7.02269 23.5437 4.93348 19.8482C2.84607 16.1559 2.50017 13.113 2.5 11.327C2.51118 9.23757 3.33572 7.24008 4.78937 5.77311C6.243 4.30617 8.20646 3.48972 10.2475 3.5001Z"
                        fill="#F4323F"
                        stroke="#F4323F"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </li>

            <li class="cs-card cs-card--grid cs-card--favorites card-light">
              <div class="cs-card__fav-img position-relative">
                <div class="cs-card__fav-img-container"></div>
              </div>
              <div class="cs-card__fav-details">
                <div
                  class="cs-card__fav-details__title d-flex justify-content-between align-items-center"
                >
                  <h3 class="cs-card__title">商品名 ＃123</h3>
                  <button
                    class="block img-wrap img-28 cs-icon-button cs-icon-button--dark"
                  >
                    <img src="/images/icons/icon-delete.svg" alt="icon" />
                  </button>
                </div>

                <div class="cs-card__fav-details__desc d-flex flex-column">
                  <div class="d-flex gap-1">
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      詳細：
                    </span>
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      商品の詳細や説明
                    </span>
                  </div>

                  <div class="d-flex gap-1">
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      サイズ：
                    </span>
                    <span
                      class="block cs-card__body17 cs-card__grayishBlue400"
                    >
                      スタンダード
                    </span>
                  </div>
                </div>

                <div
                  class="cs-card__fav-details__price d-flex justify-content-between align-items-center"
                >
                  <h6
                    class="cs-card__fav-details__priceamt text-primary-brand d-flex align-items-center gap-2 gap-md-3"
                  >
                    ¥12,600
                    <span
                      class="cs-card__sub-details text-grayishBlue500 cs-card__body17"
                    >
                      (税込)
                    </span>
                  </h6>
                  <button class="block cs-icon-button cs-icon-button--fav">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 36 36"
                      fill="none"
                      class="img-28"
                    >
                      <path
                        d="M10.2475 3.5001H10.25C12.3504 3.5001 14.2988 4.67024 15.7606 5.90558C16.4841 6.51698 17.0709 7.12961 17.4767 7.58947C17.6793 7.81907 17.836 8.00971 17.9412 8.1419C17.9939 8.20797 18.0336 8.25937 18.0597 8.29365L18.0886 8.3319L18.0952 8.34081L18.0965 8.3426L18.0967 8.34277L18.0967 8.34283L18.5 8.89378L18.9033 8.34283L18.9033 8.34277L18.9035 8.3426L18.9048 8.34081L18.9114 8.3319L18.9403 8.29365C18.9664 8.25937 19.0061 8.20797 19.0588 8.1419C19.164 8.00971 19.3207 7.81907 19.5233 7.58947C19.9291 7.12961 20.5159 6.51698 21.2394 5.90558C22.7012 4.67024 24.6496 3.5001 26.75 3.50011L26.7525 3.5001C28.7935 3.48972 30.757 4.30617 32.2106 5.77311C33.6642 7.24004 34.4888 9.23747 34.5 11.3268C34.4999 13.1137 34.154 16.1572 32.0665 19.8496C29.9773 23.5451 26.1284 27.9174 19.0802 32.3342C18.9046 32.443 18.7039 32.5 18.5 32.5C18.2961 32.5 18.0954 32.443 17.9198 32.3342C10.8716 27.9165 7.02269 23.5437 4.93348 19.8482C2.84607 16.1559 2.50017 13.113 2.5 11.327C2.51118 9.23757 3.33572 7.24008 4.78937 5.77311C6.243 4.30617 8.20646 3.48972 10.2475 3.5001Z"
                        fill="#F4323F"
                        stroke="#F4323F"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </li>
          </ul>

          <div class="featured-product">
            <h4 class="text-size-24 text-grayishBlue400 fw-bold page-title">
              おすすめ商品
            </h4>

            <div
              class="featured-product__group cs-card-wrap cs-card-wrap--gap10 d-flex flex-column list-unstyled"
            >
              <div class="row">
                <div class="col-12 col-sm-6 col-xl-4 col--gap30">
                  <div
                    class="cs-card cs-card--simple cs-card--favorites card-light"
                  >
                    <div class="cs-card__top-img position-relative">
                      <div class="cs-card__top-img-content"></div>
                    </div>
                    <div
                      class="cs-card__details d-flex justify-content-between align-items-md-end align-items-center"
                    >
                      <div class="cs-card__details-wrap d-flex flex-column">
                        <h4
                          class="cs-card__title21 fw-semibold text-grayishBlue400"
                        >
                          商品名
                        </h4>
                        <p
                          class="cs-card__desc fw-normal cs-card__body17 text-grayishBlue400"
                        >
                          詳細
                        </p>
                      </div>

                      <button class="block cs-icon-button cs-icon-button--fav-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-28" viewBox="0 0 36 36" fill="none">
                          <path d="M9.99747 3.50009V3.5001H10C12.0319 3.5001 13.918 4.62871 15.3344 5.82195C16.0352 6.41237 16.6037 7.004 16.9968 7.4481C17.1931 7.66982 17.3449 7.85389 17.4468 7.98148C17.4978 8.04526 17.5362 8.09485 17.5615 8.1279L17.5894 8.16474L17.5957 8.17329L17.597 8.17496L17.597 8.175L17.5971 8.17513L17.5972 8.1752L18 8.72381L18.4028 8.1752L18.4029 8.17513L18.403 8.175L18.403 8.17496L18.4043 8.17329L18.4106 8.16474L18.4385 8.1279C18.4638 8.09485 18.5022 8.04526 18.5532 7.98148C18.6551 7.85389 18.8069 7.66982 19.0032 7.4481C19.3963 7.004 19.9648 6.41237 20.6656 5.82195C22.082 4.62871 23.9681 3.5001 26 3.50011L26.0025 3.50009C27.9781 3.49008 29.8783 4.27789 31.2849 5.69296C32.6915 7.10797 33.4891 9.03443 33.5 11.0493C33.4998 12.7741 33.165 15.7129 31.1425 19.2792C29.1183 22.8486 25.3881 27.0734 18.5552 31.3419C18.3872 31.4456 18.1952 31.5 18 31.5C17.8048 31.5 17.6127 31.4456 17.4448 31.3419C10.6119 27.0725 6.88171 22.8472 4.85745 19.2778C2.83503 15.7117 2.50017 12.7733 2.5 11.0495C2.51083 9.03453 3.30847 7.108 4.71506 5.69296C6.12167 4.27789 8.02191 3.49008 9.99747 3.50009Z" stroke="#F4323F"/>
                          </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-4 col--gap30">
                  <div
                    class="cs-card cs-card--simple cs-card--favorites card-light"
                  >
                    <div class="cs-card__top-img position-relative">
                      <div class="cs-card__top-img-content"></div>
                    </div>
                    <div
                      class="cs-card__details d-flex justify-content-between align-items-md-end align-items-center"
                    >
                      <div class="cs-card__details-wrap d-flex flex-column">
                        <h4
                          class="cs-card__title21 fw-semibold text-grayishBlue400"
                        >
                          商品名
                        </h4>
                        <p
                          class="cs-card__desc fw-normal cs-card__body17 text-grayishBlue400"
                        >
                          詳細
                        </p>
                      </div>

                      <button class="block cs-icon-button cs-icon-button--fav-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-28" viewBox="0 0 36 36" fill="none">
                          <path d="M9.99747 3.50009V3.5001H10C12.0319 3.5001 13.918 4.62871 15.3344 5.82195C16.0352 6.41237 16.6037 7.004 16.9968 7.4481C17.1931 7.66982 17.3449 7.85389 17.4468 7.98148C17.4978 8.04526 17.5362 8.09485 17.5615 8.1279L17.5894 8.16474L17.5957 8.17329L17.597 8.17496L17.597 8.175L17.5971 8.17513L17.5972 8.1752L18 8.72381L18.4028 8.1752L18.4029 8.17513L18.403 8.175L18.403 8.17496L18.4043 8.17329L18.4106 8.16474L18.4385 8.1279C18.4638 8.09485 18.5022 8.04526 18.5532 7.98148C18.6551 7.85389 18.8069 7.66982 19.0032 7.4481C19.3963 7.004 19.9648 6.41237 20.6656 5.82195C22.082 4.62871 23.9681 3.5001 26 3.50011L26.0025 3.50009C27.9781 3.49008 29.8783 4.27789 31.2849 5.69296C32.6915 7.10797 33.4891 9.03443 33.5 11.0493C33.4998 12.7741 33.165 15.7129 31.1425 19.2792C29.1183 22.8486 25.3881 27.0734 18.5552 31.3419C18.3872 31.4456 18.1952 31.5 18 31.5C17.8048 31.5 17.6127 31.4456 17.4448 31.3419C10.6119 27.0725 6.88171 22.8472 4.85745 19.2778C2.83503 15.7117 2.50017 12.7733 2.5 11.0495C2.51083 9.03453 3.30847 7.108 4.71506 5.69296C6.12167 4.27789 8.02191 3.49008 9.99747 3.50009Z" stroke="#F4323F"/>
                          </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-4 col--gap30">
                  <div
                    class="cs-card cs-card--simple cs-card--favorites card-light"
                  >
                    <div class="cs-card__top-img position-relative">
                      <div class="cs-card__top-img-content"></div>
                    </div>
                    <div
                      class="cs-card__details d-flex justify-content-between align-items-md-end align-items-center"
                    >
                      <div class="cs-card__details-wrap d-flex flex-column">
                        <h4
                          class="cs-card__title21 fw-semibold text-grayishBlue400"
                        >
                          商品名
                        </h4>
                        <p
                          class="cs-card__desc fw-normal cs-card__body17 text-grayishBlue400"
                        >
                          詳細
                        </p>
                      </div>

                      <button class="block cs-icon-button cs-icon-button--fav-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-28" viewBox="0 0 36 36" fill="none">
                          <path d="M9.99747 3.50009V3.5001H10C12.0319 3.5001 13.918 4.62871 15.3344 5.82195C16.0352 6.41237 16.6037 7.004 16.9968 7.4481C17.1931 7.66982 17.3449 7.85389 17.4468 7.98148C17.4978 8.04526 17.5362 8.09485 17.5615 8.1279L17.5894 8.16474L17.5957 8.17329L17.597 8.17496L17.597 8.175L17.5971 8.17513L17.5972 8.1752L18 8.72381L18.4028 8.1752L18.4029 8.17513L18.403 8.175L18.403 8.17496L18.4043 8.17329L18.4106 8.16474L18.4385 8.1279C18.4638 8.09485 18.5022 8.04526 18.5532 7.98148C18.6551 7.85389 18.8069 7.66982 19.0032 7.4481C19.3963 7.004 19.9648 6.41237 20.6656 5.82195C22.082 4.62871 23.9681 3.5001 26 3.50011L26.0025 3.50009C27.9781 3.49008 29.8783 4.27789 31.2849 5.69296C32.6915 7.10797 33.4891 9.03443 33.5 11.0493C33.4998 12.7741 33.165 15.7129 31.1425 19.2792C29.1183 22.8486 25.3881 27.0734 18.5552 31.3419C18.3872 31.4456 18.1952 31.5 18 31.5C17.8048 31.5 17.6127 31.4456 17.4448 31.3419C10.6119 27.0725 6.88171 22.8472 4.85745 19.2778C2.83503 15.7117 2.50017 12.7733 2.5 11.0495C2.51083 9.03453 3.30847 7.108 4.71506 5.69296C6.12167 4.27789 8.02191 3.49008 9.99747 3.50009Z" stroke="#F4323F"/>
                          </svg>
                      </button>
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

