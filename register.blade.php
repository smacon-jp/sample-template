@extends('main.layouts.app')
@section('title', '登録用紙')
@section('content')
    <section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t"  style="background-image: url({{asset('html/main/assets/images/menus/menu-04.jpg')}})">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>登録用紙</strong></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    @if($errors->any())
                        <div class="alert alert-warning" role="alert">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mx-auto mbr-form" data-form-type="formoid">
                    <div class="p-3 bg-light item-wrapper">
                        <p class="text-center pt-2">情報を入力してください。</p>
                        <form class="pt-5" data-parsley-validate method="POST" action="/registration_complete" id="invoke_register" accept-charset="UTF-8" role="form">
                            @csrf
                            <div class="dragArea row">
                                <div class="col-12 col-md-6 form-group mb-3" data-for="last_name">
                                    <input type="text" id="last_name" class="form-control input-lg" value="{{old('last_name')}}" name="last_name" placeholder="姓（Family Name）" required="">
                                </div>
                                <div class="col-12 col-md-6 form-group mb-3" data-for="first_name">
                                    <input type="text" id="first_name" class="form-control input-lg" value="{{old('first_name')}}" name="first_name" placeholder="名（First Name）" required="">
                                </div>
                                <div class="col-12 col-md-6 form-group mb-3" data-for="name">
                                    <select name="gender" class="form-control form-select gender">
                                        <option value="2">選択..</option>
                                        <option value="1" {{ old('gender') == "1" ? 'selected' : '' }}>男性</option>
                                        <option value="0" {{ old('gender') == "0" ? 'selected' : '' }}>女性</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 form-group mb-3" data-for="name">
                                    <input type="email" name="email" placeholder="メールアドレス" data-form-field="name" class="form-control" id="name-form02-1h" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-row c_tel pb-4">
                                        <div class="c_tel_num d-flex px-2 align-items-center">
                                            <input type="text" id="tel_first" class="form-control input-lg" value="{{old('tel_first')}}" name="tel_first" placeholder="080" required="">
                                            <span class="p-2">-</span>
                                            <input type="text" id="tel_middle" class="form-control input-lg" value="{{old('tel_middle')}}" name="tel_middle" placeholder="1234" required="">
                                            <span class="p-2">-</span>
                                            <input type="text" id="tel_last" class="form-control input-lg" value="{{old('tel_last')}}" name="tel_last" placeholder="4568" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group mb-3" data-for="subject">
                                    <input type="password" id="password" class="form-control input-lg" value="{{old('password')}}" name="password" placeholder="パスワード設定" minlength="8" required="">
                                </div>
                                <div class="col-12 col-md-6 form-group mb-3" data-for="subject">
                                    <input type="password" id="password_confirm" class="form-control input-lg" name="password_confirmation" value="{{old('password_confirmation')}}" minlength="8" placeholder="パスワード再入力" required="">
                                </div>
                                <div class="col-12">
                                    <div class="form-group pt-3 px-5">
                                        <div class="custom-control custom-checkbox">
                                            <input id="agreeterms" type="checkbox" name="terms" value="1" class="custom-control-input" required="">
                                            <label class="custom-control-label" for="agreeterms"> 「 <a href="{{url('/terms')}}" target="_blank">利用規約</a>」について同意します。 </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex form-group justify-content-center mb-3">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                    <button type="submit" value="Send message" name="submit" id="submit_btn" class="g-recaptcha btn btn-primary display-7 w-100" data-sitekey="6LeNo80fAAAAAE1KspQY0ZbLLSacUCoBmVnxLs3D" data-callback='onSubmit' data-action='submit' title="登録する">登録する</button>
                                </div>
                                <div class="d-md-flex justify-content-between mt-4 pb-4 px-4">
                                    <div class="mb-2 mb-md-0">
                                        <a class="small" href="{{url('/login')}}">ログイン </a>
                                    </div>
                                    <div>
                                        <a class="small text-muted" href="{{url('/reset')}}">パスワードをお忘れですか?</a>
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