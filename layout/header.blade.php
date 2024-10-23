<section class="header container py-3">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Left Section (Logo) -->
      <a class="navbar-brand" href="/">牛金草薙</a>

      <!-- Hamburger Toggle Button (for mobile screens) -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Right Section (Menu) -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >
        <ul class="navbar-nav ml-auto" style="display: flex; justify-content: flex-end">
          <li class="nav-item">
            <a class="nav-link" href="/">TOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">お知らせ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#about">コンセプト</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#menu">おしながき</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#drinks">お飲み物</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#store">店舗情報</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">お問い合わせ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="/reservation"
              ><i class="fa fa-envelope-o" aria-hidden="true"></i> WEB 予約</a
            >
          </li>
          <div class="icons-menu dropdown open">
            <a class="nav-link link text-black dropdown-toggle show display-4" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">マイページ</a>
            <div class="dropdown-menu show" data-bs-popper="none" aria-labelledby="dropdown-826">
                @if(session('customer_id'))
                    <a class="dropdown-item p-3" href="/mypage/reservation-status"><i class="far fa-id-card"></i> 予約状況</a>
                    <a class="dropdown-item p-3" href="/mypage/customer-profile-edit-settings"><i class="far fa-id-badge"></i> プロフィールの更新</a>
                    <a class="dropdown-item p-3" href="/mypage/account-password-change"><i class="fas fa-unlock-alt"></i> パスワードの変更</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item p-3" href="/logout"><i class="fas fa-sign-out-alt"></i> ログアウト</a>
                @else
                    <a class="dropdown-item p-3" href="/login"><i class="fas fa-sign-in-alt"></i> ログイン</a>
                    <a class="dropdown-item p-3" href="/register"><i class="fas fa-edit"></i> 登録</a>
                @endif
            </div>
        </div>
        </ul>
      </div>
    </nav>
  </section>