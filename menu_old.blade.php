@extends('main.layouts.app')
@section('title', 'メニュー')
@section('content')
    <section data-bs-version="5.1" class="header5 cid-u7kWQ3BL1M" id="header05-1t">
    <div class="topbg"></div>
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 content-head">
                <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>メニュー</strong></h1>
                <p class="mbr-text mbr-fonts-style mb-4 display-7">予約倶楽部 （Basic） ザリガニ料理専門店のメニューページでは、ユニークなザリガニ料理を中心に、多彩な四川料理や季節の特選メニューをご紹介しています。</p>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-lg-8"><img src="{{asset('html/main/assets/images/menus/menu-04.jpg')}}" alt="予約倶楽部 （Basic）"></div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="features15 cid-u74yxsseJn mbr-parallax-background" id="features015-i" style="background-image: url({{asset('html/main/assets/images/menus/menu-04.jpg')}})">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
    <div class="container">
        @php
            $groupedMenus = $menus->groupBy('menu_type');
        @endphp
        @foreach($groupedMenus as $type => $menusInType)
            @if(isset($menuTypes[$type]))
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>{{$menuTypes[$type]}} メニュー</strong></h4>
                    <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">{{ strtoupper($type) }} MENU</h5>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($menusInType as $menu)
            <div class="item features-without-image col-12 col-lg-6">
                <div class="item-wrapper">
                    <div class="img-wrapper"><img src="{{$menu->MainImagePath}}" class="img-responsive" alt="Image of {{$menu->name}}"></div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-0 display-7"><strong>{{$menu->name}}</strong></h4>
                        <h5 class="card-text mbr-fonts-style mt-3 display-7">
                            <div>{{$menu->description}}</div>
                        </h5>
                        <span class="badge bg-danger text-dark display-4">{{number_format($menu->price)}}円 (税込)</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            @endif
        @endforeach
    </div>
</section>
@endsection
<script>
    function addToCart(productId) {
        fetch('/add-to-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('商品がカートに追加されました！');
            } else {
                alert('商品をカートに追加できませんでした。');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('エラーが発生しました。');
        });
    }
</script>