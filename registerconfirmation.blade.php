@extends('main.layouts.app')
@section('title', 'ご登録ありがとうございます')
@section('content')
    <section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>ご登録ありがとうございます。</strong></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="bg-white item-wrapper p-5">
                        <h3 class="pb-2 text-center">この度は会員登録依頼をいただきまして、有り難うございます。</h3>
                        <p class="pb-2 text-center">ご登録を完了するために、ご登録いただいたメールに確認用のリンクをお送りしています。登録後24時間以内に、ご登録いただいたメールからURLをご確認ください。</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary w-50" href="{{url('/')}}">TOPへ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection