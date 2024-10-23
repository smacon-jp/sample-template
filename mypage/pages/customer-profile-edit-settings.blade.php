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
            お客様情報の変更
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="acc-settings__img-mobile d-block d-sm-none"></div>

          <div class="card-light card-light--edit acc-settings acc-settings--edit">
            <form action="{{ url("/customer/update") }}" method="POST">
              @csrf
              <div class="acc-settings__container">
                <div class="acc-edit">
                  <div class="acc-edit__list">
                    <div class="row no-gutters row--full-width-mobile-gap">
                      <div class="col col-5 col--full-width-mobile">
                        <label class="acc-settings__title" for="customer-family-name">
                          姓（Family Name）
                        </label>
                      </div>
                      <div class="col col-7 col--full-width-mobile d-flex justify-content-end">
                        <input
                          type="text"
                          name="last_name"
                          id="customer-family-name"
                          class="input-customer input-customer--w-full"
                          value="{{ old('last_name', $customer->last_name) }}"
                          placeholder="お名前"
                        />
                        @error('last_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="acc-edit__list">
                    <div class="row no-gutters row--full-width-mobile-gap">
                      <div class="col col-5 col--full-width-mobile">
                        <label class="acc-settings__title" for="customer-first-name">
                          名（First Name）
                        </label>
                      </div>
                      <div class="col col-7 col--full-width-mobile d-flex justify-content-end">
                        <input
                          type="text"
                          name="first_name"
                          id="customer-first-name"
                          class="input-customer input-customer--w-full"
                          value="{{ old('first_name', $customer->first_name) }}"
                          placeholder="お名前"
                        />
                        @error('first_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="acc-edit__list">
                    <div class="row no-gutters row--full-width-mobile-gap">
                      <div class="col col-5 col--full-width-mobile">
                        <label class="acc-settings__title" for="customer-email">
                          メールアドレス
                        </label>
                      </div>
                      <div class="col col-7 col--full-width-mobile d-flex justify-content-end">
                        <input
                          type="email"
                          name="email"
                          id="customer-email"
                          class="input-customer input-customer--w-full"
                          value="{{ old('email', $customer->email) }}"
                          placeholder="parsley@montana.com"
                        />
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="acc-edit__list">
                    <div class="row no-gutters row--full-width-mobile-gap">
                      <div class="col col-5 col--full-width-mobile">
                        <label class="acc-settings__title" for="customer-phone">
                          電話番号
                        </label>
                      </div>
                      <div class="col col-7 col--full-width-mobile d-flex justify-content-end">
                        <input
                          type="tel"
                          id="customer-phone"
                          name="telephone"
                          class="input-customer input-customer--w-full"
                          placeholder="080-1234-5678"
                          value="{{ old('telephone', $customer->telephone) }}"
                        />
                        @error('telephone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="acc-edit__list">
                    <div class="row no-gutters row--full-width-mobile-gap">
                      <div class="col col-5 col--full-width-mobile">
                        <label class="acc-settings__title" for="customer-notification">
                          通知受信
                        </label>
                      </div>
                      <div class="col col-7 col--full-width-mobile d-flex justify-content-end">
                        <label class="switch">
                          <input type="checkbox" name="notification" {{ $customer->notification ? 'checked' : '' }} />
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="acc-edit-actions d-flex align-items-center justify-content-center">
                  <a href="/mypage/customer-profile-settings" class="align-items-center gap-2 d-flex cs-opacity">
                    <span class="block img-wrap img-24">
                      <img src="{{ asset('my-page/images/icons/icons-arrow-back-bold.svg') }}" alt="icon" />
                    </span>
                    <span class="text-size-22 fw-semibold text-grayishBlue300">戻る</span>
                  </a>

                  <div class="div acc-edit__btn-save">
                    <button type="submit" class="cs-btn-dark d-flex justify-content-center align-items-center">
                      保存する
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
