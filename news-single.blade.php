@extends('main.layouts.app')
@section('title', 'お知らせ')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 class="text-center mb-4">お知らせ</h1>
                    <article class="bg-light p-4 rounded">
                        <header class="mb-4">
                            <h2 class="h3 fw-bold">{{$singlePost->title}}</h2>
                            <p class="text-muted small">
                                <time datetime="{{$singlePost->published_date}}">
                                    {{date('Y年m月d日', strtotime($singlePost->published_date))}}
                                </time>
                            </p>
                        </header>
                        <div class="article-body mb-4">
                            {!!$singlePost->body!!}
                        </div>
                        <footer class="text-center">
                            <a href="{{url('/news/')}}" class="btn btn-outline-primary">
                                すべてのお知らせを見る <i class="bi bi-arrow-right"></i>
                            </a>
                        </footer>
                    </article>
            </div>
        </div>
    </div>
@endsection