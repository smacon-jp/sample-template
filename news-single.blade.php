@extends('main.layouts.app')
@section('title', 'お知らせ')
@section('content')
<section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M pb-0 mb-0" id="header05-1t">
        <div class="align-center container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2 pb-3"><strong>お知らせ</strong></h1>
                </div>
            </div>
        </div>
    </section>
<section data-bs-version="5.1" class="features10 cid-u74JOOVJsd" id="features10-1b">
    <div class="container">
        <div class="row mt-4">
            <div class="item features-without-image col-12">
                <div class="item-wrapper">
                    <div class="top-line row">
                        <div class="col">
                            <div class="card-title mbr-fonts-style d-flex flex-column pb-2">
                                <h2 class="display-4 fw-bold">{{$singlePost->title}}</h2>
                                <small class="display-7 text-muted">{{date('Y.m.d', strtotime($singlePost->published_date))}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-line">
                        <p class="mbr-text mbr-fonts-style display-7">{!!$singlePost->body!!}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-lg btn-info" href="{{url('/news/')}}"> すべてのお知らせを見る →</a>
            </div>
        </div>
    </div>
</section>
@endsection