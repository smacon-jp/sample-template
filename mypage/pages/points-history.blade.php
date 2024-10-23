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
            ポイント残高 / 履歴
          </h4>
        </div>
        <div class="profile-menu-content__wrapcontent">
          <div class="list-card__filter">
            <a
              href="#"
              class="card-light list-card__pointbar d-flex justify-content-center align-items-center position-relative"
            >
              <span class="list-card__pointbar__label fw-bold"> 残高 </span>
              <span class="list-card__pointbar__balance fw-bold">
                {{ $customer->point }}P
              </span>

              <span
                class="list-card__pointbar__icon img-wrap img-28 position-absolute"
              >
                <img src="{{ asset('my-page/images/icons/Icon-re2.svg') }}" alt="icon" />
              </span>
            </a>
          </div>
          <div class="list-card__main-section d-flex flex-column">
            <div class="list-card__info-section d-flex flex-column">
              <h5
                class="text-size-22 fw-semibold text-grayishBlue400 mt-1 mt-sm-0"
              >
                履歴
              </h5>

              <div class="list-card__pointswrap d-flex flex-column">
                @foreach ($points as $point)
                <div class="card-light list-card">
                    <div class="list-card__in list-card__in--points">
                      <h4 class="list-card__title mb-3">{{ $point->created_at->format('M d, Y') }}</h4>
  
                      <div class="list-card__details-wrap">
                        <div class="list-card__details d-flex flex-column">
                          <ul
                            class="list-card__details__wrap flex-column d-flex"
                          >
                            {{-- <li
                              class="list-card__details__li list-card__details__li--end d-flex"
                            >
                              <span class="list-card__details__label text-gra"
                                >注文金額</span
                              ><span class="list-card__details__value"
                                >¥11,400</span
                              >
                            </li> --}}
  
                            <li
                              class="list-card__details__li list-card__details__li--end d-flex"
                            >
                              <span
                                class="list-card__details__label list-card__details__label--blue text-gra"
                                >ポイント</span
                              ><span
                                class="list-card__details__value list-card__details__value--blue"
                                >{{$point->point  }} P</span
                              >
                            </li>
                          </ul>
                          <span> {{ $point->message}} </span>
                          <span> {{ $point->memo}} </span>

                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

