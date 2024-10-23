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
            買い物カゴ
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
                    class="block img-wrap img-20 cs-icon-button cs-icon-button--dark"
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
                  <div class="cs-inc-dec">
                    <button class="block  cs-icon-button cs-icon-button--minus">
                      <svg class="cs-inc-dec__img" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_347_537)">
                          <path
                            d="M4 12H20.1144"
                            stroke="#F4323F"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_347_537">
                            <rect
                              width="18"
                              height="2"
                              fill="white"
                              transform="translate(3 11)"
                            />
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                    <span class="d-flex cs-inc-dec__value">
                      2
                    </span>
                   
                    <button class="block cs-icon-button cs-icon-button--plus">
                      <svg xmlns="http://www.w3.org/2000/svg"class="cs-inc-dec__img viewBox="0 0 24 24" fill="none">
                        <path d="M12 3V21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 12H21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                  </div>
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
                    class="block img-wrap img-20 cs-icon-button cs-icon-button--dark"
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
                  <div class="cs-inc-dec">
                    <button class="block  cs-icon-button cs-icon-button--minus">
                      <svg class="cs-inc-dec__img" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_347_537)">
                          <path
                            d="M4 12H20.1144"
                            stroke="#F4323F"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_347_537">
                            <rect
                              width="18"
                              height="2"
                              fill="white"
                              transform="translate(3 11)"
                            />
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                    <span class="d-flex cs-inc-dec__value">
                      2
                    </span>
                   
                    <button class="block cs-icon-button cs-icon-button--plus">
                      <svg xmlns="http://www.w3.org/2000/svg"class="cs-inc-dec__img viewBox="0 0 24 24" fill="none">
                        <path d="M12 3V21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 12H21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                  </div>
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
                    class="block img-wrap img-20 cs-icon-button cs-icon-button--dark"
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
                  <div class="cs-inc-dec">
                    <button class="block  cs-icon-button cs-icon-button--minus">
                      <svg class="cs-inc-dec__img" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_347_537)">
                          <path
                            d="M4 12H20.1144"
                            stroke="#F4323F"
                            stroke-width="2"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_347_537">
                            <rect
                              width="18"
                              height="2"
                              fill="white"
                              transform="translate(3 11)"
                            />
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                    <span class="d-flex cs-inc-dec__value">
                      2
                    </span>
                   
                    <button class="block cs-icon-button cs-icon-button--plus">
                      <svg xmlns="http://www.w3.org/2000/svg"class="cs-inc-dec__img viewBox="0 0 24 24" fill="none">
                        <path d="M12 3V21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 12H21" stroke="#F4323F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="cart-action">
            <div
              class="cart-action__in d-flex flex-md-row flex-column justify-content-end"
            >
              <div
                class="cart-action__totalAmt d-flex justify-content-between justify-content-md-start align-items-center"
              >
                <span
                  class="cart-action__label d-block text-grayishBlue400"
                >
                  合計
                </span>
                <span class="cart-action__price d-block text-primary-brand">
                  ¥18,900
                </span>
              </div>

              <div class="cart-action__btn-checkout">
                <a
                  href="checkout.html"
                  class="d-block cs-btn-primary w-full"
                  >購入手続きへ</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

