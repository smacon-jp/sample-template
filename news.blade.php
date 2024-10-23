@extends('main.layouts.app')
@section('title', 'お知らせ')
@section('content')
    <div class="container py-4">
        <h1 class="h4 text-center mb-4">お知らせ</h1>
        <div class="list-group">
            @foreach($blogs as $blog)
                <div class="list-group-item py-3 px-4 border-start-0 border-end-0">
                    <div class="row align-items-center">
                        <div class="col-auto">
                    <span class="badge bg-light text-dark">
                        {{date('Y.m.d', strtotime($blog->published_date))}}
                    </span>
                        </div>
                        <div class="col">
                            <h2 class="h6 mb-1">{{$blog->title}}</h2>
                            <p class="small text-muted mb-2">{!! mb_substr($blog->body, 0, 60, "utf-8") !!}...</p>
                        </div>
                        <div class="col-auto">
                            <a href="/news/{{$blog->slug}}" class="btn btn-outline-secondary btn-sm px-5">
                                詳細 <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection