@extends('main.layouts.app')
@section('title', 'パスワードのリセット')
@section('content')
    <section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t"  style="background-image: url({{asset('html/main/assets/images/menus/menu-04.jpg')}})">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>ログインフォーム</strong></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    @if($errors->any())
                        <div class="alert alert-warning" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 mx-auto mbr-form" data-form-type="formoid">
                    <div class="p-3 bg-light item-wrapper">
                        <p class="text-center pt-2">下記にご登録いただいたメールアドレスを入力してください。<br>リセットするためのリンクをお送りします。</p>
                        <form class="form py-3 px-3" data-parsley-validate method="POST" action="/api/reset_password" id="reset_password" accept-charset="UTF-8" role="form">
                            @csrf
                            <div class="dragArea row">
                                <div class="col-md-12 form-group mb-3" data-for="name">
                                    <input type="email" name="email" placeholder="メールアドレス" data-form-field="name" class="form-control" id="name-form02-1h" required>
                                </div>
                                <div class="col-12 d-flex form-group justify-content-center mb-3">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                    <button type="submit" value="Send message" name="submit" id="submitButton" class="g-recaptcha btn btn-primary display-7 w-100" data-sitekey="6LeNo80fAAAAAE1KspQY0ZbLLSacUCoBmVnxLs3D" data-callback='onSubmit' data-action='submit' title="送信する">送信する</button>
                                </div>
                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a class="small" href="{{url('/register')}}">登録 </a>
                                    </div>
                                    <div>
                                        <a class="small text-muted" href="{{url('/login')}}">ログイン</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection