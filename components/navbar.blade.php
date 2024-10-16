<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg custom-nav">
    <div class="container">
        <div class="navbar-brand">
            <span class="navbar-logo">
              <a href="{{url('/')}}">
                <img src="{{asset('html/main/assets/images/logo.png')}}" alt="予約倶楽部 （Basic）" style="height: 7rem;">
              </a>
            </span>
{{--            <span class="navbar-caption-wrap">--}}
{{--              <a class="navbar-caption text-black display-4" href="#">予約倶楽部 （Basic）</a>--}}
{{--            </span>--}}
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{url('/')}}">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{url('/about')}}">About Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{url('/menus')}}" aria-expanded="false">Menus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{url('/news')}}" aria-expanded="false">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
            <div class="icons-menu dropdown open">
                <a class="nav-link link text-black dropdown-toggle show display-4" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true"><span class="p-2 mbr-iconfont mobi-mbri-user mobi-mbri"></span>マイページ</a>
                <div class="dropdown-menu show" data-bs-popper="none" aria-labelledby="dropdown-826">
                    @if(session('customer_id'))
                        <a class="dropdown-item" href="/mypage/"><i class="far fa-id-card"></i> 予約状況</a>
                        <a class="dropdown-item" href="/mypage/reserve-history/"><i class="fas fa-history"></i> 予約履歴</a>
                        <a class="dropdown-item" href="/mypage/update/"><i class="far fa-id-badge"></i> プロフィールの更新</a>
                        <a class="dropdown-item" href="/mypage/change-pwd/"><i class="fas fa-unlock-alt"></i> パスワードの変更</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> ログアウト</a>
                    @else
                        <a class="dropdown-item" href="/login"><i class="fas fa-sign-in-alt"></i> ログイン</a>
                        <a class="dropdown-item" href="/register"><i class="fas fa-edit"></i> 登録</a>
                    @endif
                </div>
            </div>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-primary display-4" href="{{url('/reservation')}}">予約</a>
            </div>
        </div>
    </div>
</nav>