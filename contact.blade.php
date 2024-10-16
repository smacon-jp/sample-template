@extends('main.layouts.app')
@section('title', 'お店舗について')
@section('content')

<section data-bs-version="5.1" class="form5 cid-u74KzW9h6M" id="form02-1h">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>お問い合わせ</strong></h3>
                    <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">お問い合わせは、ウェブサイトの専用フォーム、メール、またはお電話にて承っております。</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form class="form" name="enq" method="post" action="{{ url('inquiry') }}">
                    @csrf
                    
                    <div class="row justify-content-center">
                        <div class="col-12">
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    お問い合わせは正常に送信されました。
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3" data-for="name">
                            <input type="text" name="name" placeholder="氏名" data-form-field="name" class="form-control" id="name-form02-1h" required value="{{ old('name') }}">
                        </div>
                        <div class="col-sm-12 mb-3" data-for="email">
                            <input type="email" name="email" placeholder="メールアドレス" data-form-field="email" class="form-control" id="email-form02-1h" required value="{{ old('email') }}">
                        </div>
                        <div class="col-12 mb-3" data-for="subject">
                            <input type="text" name="subject" class="form-control" placeholder="お問い合わせ件名" required value="{{ old('subject') }}">
                        </div>
                        <div class="col-12 mb-3" data-for="textarea">
                            <textarea rows="6" name="message" class="form-control" placeholder="お問い合わせ内容" id="textarea-form02-1h" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12 d-flex form-group justify-content-center mb-3">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" value="Send message" name="submit" id="submitButton" class="g-recaptcha btn btn-primary display-7 w-50" title="送信">送信</button>
                        </div>
                        <p></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="map1 cid-u74KiOtZWz" id="map01-1g">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Access</strong></h3>
                </div>
            </div>
        </div>
        <div class="google-map">{!! $shopinfo->google_map !!}</div>
    </div>
</section>
@endsection
<script src="https://www.google.com/recaptcha/api.js"></script>
