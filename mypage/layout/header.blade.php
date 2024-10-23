<div
id="sidebar"
class="top-0 profile-menu position-fixed shadow-profile-menu bg-white"
>
<div class="p-0 profile-menu__wrap">
  <div
    class="bg-white align-items-center gap-3 profile-menu__heading sticky-top top-0 left-0 d-flex"
  >
    <button
      id="close-sidebar-phone"
      type="button"
      class="btn-close-cs profile-menu-preview-btnclose--phone"
      data-bs-dismiss="offcanvas"
      aria-label="Close"
    >
      <img src="{{ asset('my-page/images/icons/icon-close.svg')}}" alt="icon-close-phone" />
    </button>

    <button
      id="close-sidebar"
      type="button"
      class="btn-close profile-menu-preview-btnclose"
      data-bs-dismiss="offcanvas"
      aria-label="Close"
    ></button>

    <span class="d-block text-size-24 fw-semibold text-grayishBlue400"
      >こんにちは、{{ isset($customer) ? $customer->last_name :'' }}
    </span>
  </div>

  <div
    class="flex-row justify-content-between mt-2 profile-menu__li-wrap d-flex profile-menu__btn-grp"
  >
    <a
      href="/"
      class="proj-btn-bg--primary profile-menu__btn profile-menu__btn--landing"
    >
      <span class="d-flex"> トップページ </span>
      <span class="d-flex img-wrap profile-menu-img">
        <img src="{{ asset('my-page/images/icons/icon-btn-left.svg')}}" alt="icon" />
      </span>
    </a>

    <a
      href="/logout"
      class="proj-btn-outline--primary profile-menu__btn profile-menu__btn--logout"
    >
      <span class="d-flex img-wrap profile-menu-img">
        <img src="{{ asset('my-page/images/icons/icon-log-out.svg')}}" alt="icon" />
      </span>
      <span class="d-flex"> ログアウト </span>
    </a>
  </div>

  <div class="profile-menu__li-wrap pt-3">
    <div class="profile-menu__inner-menu">
      <div class="d-flex flex-column profile-menu__ul">
        <a
          href="/mypage/notice"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-notice.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            お知らせ
          </span>
        </a>

        <a
          href="/mypage/favorites"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-fav.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            お気に入り
          </span>
        </a>

        <a
          href="/mypage/cart"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-cart.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            買い物カゴ
          </span>
        </a>

        <a
          href="/mypage/order-history"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-time.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            注文履歴
          </span>
        </a>

        <a
          href="/mypage/payment-history"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-yen.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            お支払い履歴
          </span>
        </a>

        <a
          href="/mypage/reservation-status"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-reservation.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            予約状況 / 予約履歴
          </span>
        </a>

        <a
          href="/mypage/points-history"
          class="d-flex align-items-center profile-menu__li"
        >
          <span class="inline-flex img-wrap profile-menu-img">
            <img src="{{ asset('my-page/images/icons/icon-product-p.svg')}}" alt="icon" />
          </span>
          <span class="inline-flex text-size-22 text-grayishBlue300">
            ポイント残高 / 履歴
          </span>
        </a>
      </div>
    </div>
  </div>

  <div
    class="profile-menu__li-wrap position-absolute profile-menu__bottom bg-white pb-4 pb-md-5"
  >
    <div class="profile-menu__inner-menu">
      <a
        href="/mypage/customer-account-settings"
        class="d-flex align-items-center profile-menu__li"
      >
        <span class="inline-flex img-wrap profile-menu-img">
          <img src="{{ asset('my-page/images/icons/icon-settings.svg')}}" alt="icon" />
        </span>
        <span class="inline-flex text-size-22 text-grayishBlue300">
          アカウント設定
        </span>
      </a>
    </div>
  </div>
</div>
</div>