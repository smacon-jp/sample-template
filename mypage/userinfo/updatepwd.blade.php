@extends('main.layouts.app')
@section('title', 'パスワードの更新 - マイページ')
@section('content')
    <main role="main" class="page">
        <div class="user-page" id="page-wrapper">
            <!-- Top content -->
            <div class="container my-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">お客様の情報</h3>
                    </div>
                    <div class="card-body">
                        <form data-parsley-validate class="update-user-info" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="NewPassword" name="password" type="password" placeholder="新しいパスワード"  minlength="8" data-parsley-pattern="/^(?=.*\d)(?=.*[a-z])[0-9a-z]{8,}$/" data-parsley-trigger="change focusin" data-parsley-required-message="新しいパスワード" data-parsley-pattern-message="半角英字と半角数字を含む8文字以上にて設定する必要があります。" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="ConfirmNewPassword" name="password_confirm" type="password" placeholder="新しいパスワードの繰り返し" minlength="8" data-parsley-pattern="/^(?=.*\d)(?=.*[a-z])[0-9a-z]{8,}$/" data-parsley-required-message="パスワードが一致する必要があります。" data-parsley-pattern-message="半角英字と半角数字を含む8文字以上にて設定する必要があります。" data-parsley-trigger="change focusin" data-parsley-equalto="#NewPassword" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 mb-4">
                                                <a href="/mypage/" class="btn btn-primary" target="_self">キャンセル</a>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <button type="submit" class="btn btn-success">変更する</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('page_script')
<script src="/html/main/assets/js/common.js" charset="utf-8" type="text/javascript" name="common-js"></script>
<script src="/html/main/assets/js/parsley.js" charset="utf-8" type="text/javascript" name="parsley-js"></script>
<script src="/html/main/assets/js/parsley-ja.js" charset="utf-8" type="text/javascript" name="parsley-ja-js"></script>
@stop