<!DOCTYPE html>
<html lang="ja">
<head>
    @include('main.partials.head')
</head>
<body>
@include('main.layout.header')
@yield('content')
@include('main.layout.footer')
@include('main.partials.scripts')
<div id="scrollToTop" class="scrollToTop mbr-arrow-up">
    <a style="text-align: center;">
        <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
    </a>
</div>
<input name="animation" type="hidden">
</body>
</html>
