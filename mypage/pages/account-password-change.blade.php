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
            パスワード変更
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
         
          <div class="card-light acc-pswd">
            <div class="acc-pswd__container">
              <div class="acc-pswd__edit">
                <form class="acc-pswd__form acc-pswd__form--lg d-flex flex-column" action="{{ url('/mypage/change-pwd') }}" method="POST">
                  @csrf
                  
                  {{-- New Password --}}
                  <div class="cs-input cs-input--pswd-edit d-flex flex-column">
                    <label for="new-pswd" class="form-label fw-bold cs-input__label cs-input__label--lg">
                      新しいパスワード
                    </label>
                    <input
                      type="password"
                      name="new_password"
                      class="form-control cs-input__input cs-input__input--lg @error('new_password') is-invalid @enderror"
                      id="new-pswd"
                      placeholder="新しいパスワードを入力してください"
                    />
                    {{-- Error Message --}}
                    @error('new_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  {{-- Confirm New Password --}}
                  <div class="cs-input cs-input--pswd-edit d-flex flex-column">
                    <label for="new-pswd-re" class="form-label fw-bold cs-input__label cs-input__label--lg">
                      新しいパスワードの再入力
                    </label>
                    <input
                      type="password"
                      name="new_password_confirmation"
                      class="form-control cs-input__input cs-input__input--lg @error('new_password_confirmation') is-invalid @enderror"
                      id="new-pswd-re"
                      placeholder="ご確認のため、もう一度入力してください"
                    />
                    {{-- Error Message --}}
                    @error('new_password_confirmation')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="acc-edit-actions d-flex align-items-center justify-content-center">
                    <a href="/mypage/customer-account-settings" class="align-items-center gap-2 d-flex cs-opacity">
                      <span class="block img-wrap img-24">
                        <img src="{{ asset('my-page/images/icons/icons-arrow-back-bold.svg') }}" alt="icon" />
                      </span>
                      <span class="text-size-22 fw-semibold text-grayishBlue300">戻る</span>
                    </a>
    
                    <div class="acc-edit__btn-save">
                      <button type="submit" class="cs-btn-dark d-flex justify-content-center align-items-center">
                        保存する
                      </button>
                    </div>
                  </div>
                </form>
              </div>

            
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
