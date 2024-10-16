@extends('main.layouts.app')
@section('title', '更新情報 - マイページ')
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
                    <form data-parsley-validate class="update-user-info" action="#" method="POST">
                        @csrf
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="LastName">姓（Family Name）</label>
                                <input class="form-control" id="LastName" name="last_name" type="text" placeholder="お名前（姓）" value="{{$customer->last_name}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="FirstName">名（First Name）</label>
                                <input class="form-control" id="FirstName" name="first_name" type="text" placeholder="お名前（名）" value="{{$customer->first_name}}" required>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="CustomerEmail">メールアドレス</label>
                                <input class="form-control" id="CustomerEmail" name="email" type="email" placeholder="メールアドレス" value="{{$customer->email}}" data-parsley-trigger="change focusin" data-parsley-required-message="メールアドレスを入力してください。" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="CustomerTel">電話番号</label>
                                <div class="input-group">
                                    <input class="form-control" id="CustomerTel" name="telephone" type="tel" value="{{$customer->telephone}}" readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update_telephone_modal">変更</button>
                                    </div>
                                </div>
                                <input class="form-control" id="new_telephone" name="update_telephone" type="hidden" value="{{$customer->telephone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>性別</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="is_male" name="is_male" type="radio" value="1" {{$customer->is_male ? "checked" : ""}} required>
                                <label class="form-check-label" for="is_male">男性</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="is_female" name="is_male" type="radio" value="0" {{! $customer->is_male ? "checked" : ""}}>
                                <label class="form-check-label" for="is_female">女性</label>
                            </div>
                        </div>
                        <div class="form-row row justify-content-center pt-4">
                            <div class="col-md-6">
                                <div class="form-group d-flex justify-content-between">
                                    <a href="/mypage/" class="btn btn-primary">キャンセル</a>
                                    <button type="submit" class="btn btn-success">変更する</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade" id="update_telephone_modal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">新しい電話番号を登録する</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="mb-4">新しい電話番号をお書きください。</h5>
                <form data-parsley-validate id="form_tel">
                    <div class="form-row c_tel">
                        <div class="c_tel_num d-flex px-2">
                            <input
                                type="text"
                                id="tel_first"
                                class="form-control input-lg"
                                value=""
                                name="tel_first"
                                placeholder="080"
                                data-parsley-type="digits"
                                data-parsley-length="[2,4]"
                                data-parsley-trigger="change focusin"
                                data-parsley-errors-container=".errorBlock1"
                                required="">
                            <span class="p-2">-</span>
                            <input
                                type="text"
                                id="tel_middle"
                                class="form-control input-lg"
                                value=""
                                name="tel_middle"
                                placeholder="1234"
                                data-parsley-type="digits"
                                data-parsley-length="[2,4]"
                                data-parsley-trigger="change focusin"
                                data-parsley-errors-container=".errorBlock2"
                                required="">
                            <span class="p-2">-</span>
                            <input
                                type="text"
                                id="tel_last"
                                class="form-control input-lg"
                                value=""
                                name="tel_last"
                                placeholder="4568"
                                data-parsley-type="digits"
                                data-parsley-length="[4,4]"
                                data-parsley-trigger="change focusin"
                                data-parsley-errors-container=".errorBlock3"
                                required="">
                        </div>
                    </div>
                    <div class="form-row c_tel pb-4 w-100">
                        <div class="d-flex px-2 w-100">
                            <div class="errorBlock1 col-md-4"></div>
                            <div class="errorBlock2 col-md-4"></div>
                            <div class="errorBlock3 col-md-4"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <button id="save_phone" type="button" class="btn btn-primary">電話番号変更する</button>
            </div>
        </div>
    </div>
</div>
<div id="notification">
    @if (session('flash_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4>{{ session('flash_message') }}</h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
@endsection
@section('page_script')
<script src="/html/main/assets/js/parsley.js" charset="utf-8" type="text/javascript" name="parsley-js"></script>
<script src="/html/main/assets/js/parsley-ja.js" charset="utf-8" type="text/javascript" name="parsley-ja-js"></script>
<script>
    $(document).ready(function() {
        $('#form_tel').parsley();
        $("#save_phone").on('click', function() {
            $('#form_tel').parsley().validate();
            if ($('#form_tel').parsley().isValid()) {
                var tel_first = $("#tel_first").val();
                var tel_middle = $("#tel_middle").val();
                var tel_last = $("#tel_last").val();
                var new_tel_num = tel_first + "-" + tel_middle + "-" + tel_last;
                $("#new_telephone").val(new_tel_num);
                $("#update_telephone_modal").modal('hide');
                $(".update-user-info").submit();
            } else {

            }
        });
    });
</script>
@stop
