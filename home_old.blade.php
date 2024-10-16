@extends('main.layouts.app')
@section('title', 'TOP')
@section('content')
	<section data-bs-version="5.1" class="header18 cid-u74lr8P3EA" data-bg-video="https://www.youtube.com/watch?v=2Gg6Seob5Mg" id="header18-1">
		<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="content-wrap col-12 col-md-8">
					<h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1 text-center">
						<strong><br>予約倶楽部 （Basic）　- ザリガニの魅力を再発見</strong>
					</h1>
					<p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7 text-center">ザリガニ料理の新たな地平を開く【予約倶楽部 （Basic）】へようこそ。ここでは、一口サイズの「マーラーザリガニ炒め」や独創的な「塩漬け卵黄ザリガニ炒め」など、多様なザリガニ料理をご提供しています。四川料理の本格的な味わいと共に、種類豊富なドリンクとともにお楽しみください。</p>
				</div>
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="timeline03 cid-u74lRtSLrD" id="timeline03-2">
		<div class="container">
			@foreach($news as $shop_news)
			<div class="row justify-content-center item mb-5">
				<div class="col-12 col-lg-2">
					<h5 class="mbr-card-title mbr-fonts-style mt-0 mb-3 display-7">{{date('Y.m.d', strtotime($shop_news->published_date))}}</h5>
				</div>
				<div class="col-12 col-lg-6">
					<h6 class="mbr-card-subtitle mbr-fonts-style mt-0 mb-3 display-7">
						<a href="/news/{{$shop_news->slug}}" class="news-list__link">{{$shop_news->title}}<i class="news-list__icn">→</i></a>
					</h6>
				</div>
			</div>
			@endforeach
			<div class="d-flex justify-content-center">
				<a href="/news/" class="btn btn-primary animate__animated animate__delay-1s animate__fadeIn">ニュースページへ &nbsp; →</a>
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="features034 cid-u74mItOMK3" id="features034-l">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 content-head pb-4">
					<div class="text-wrapper text-center">
						<h5 class="mbr-section-title mbr-fonts-style mb-4 display-4 text-light">デリバリーサービスで【予約倶楽部 （Basic）】をご自宅に</h5>
						<p class="text-light">予約倶楽部 （Basic）の味をもっと手軽に楽しめるように、Uber Eats、出前館、Wolt、熊猫外卖など人気デリバリーサービスを通じてご提供しています。ご注文はお使いのアプリから数タップで完了。お気に入りのザリガニ料理を直接お届けします。</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="item features-without-image col-12 col-lg-3">
					<div class="item-wrapper justify-content-center">
						<div class="iconfont-wrapper">
							<a href="https://www.ubereats.com/jp/store/%E8%9D%A6%E9%81%93-%E3%82%B5%E3%83%AA%E3%82%AB%E3%83%8B%E5%B0%82%E9%96%80%E5%BA%97/aDi_UsqUQZ-LHn4kuzTD6Q" target="_blank"> <img src="{{asset('html/main/assets/images/uber-eats.png')}}" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<div class="item features-without-image col-12 col-lg-3">
					<div class="item-wrapper justify-content-center">
						<div class="iconfont-wrapper">
							<a href="https://demae-can.com/shop/menu/3231063" target="_blank"> <img src="{{asset('html/main/assets/images/demaikan.png')}}" class="img-responsive bg-white"></a>
						</div>
					</div>
				</div>
				<div class="item features-without-image col-12 col-lg-3">
					<div class="item-wrapper justify-content-center">
						<div class="iconfont-wrapper">
							<a href="https://wolt.com/ja/jpn/tokyo/restaurant/shado" target="_blank"> <img src="{{asset('html/main/assets/images/Wolt.png')}}" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<div class="item features-without-image col-12 col-lg-3">
					<div class="item-wrapper justify-content-center">
						<div class="iconfont-wrapper">
							<a href="https://qr30.cn/DMx7D4" target="_blank"> <img src="{{asset('html/main/assets/images/hungrypanda.png')}}" class="img-responsive"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="features024 cid-u74mCLwWxT" id="features024-3">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12">
					<div class="card-wrapper">
						<div class="row">
							<div class="col-12 col-md-12 col-lg-6 image-wrapper">
								<img class="w-100" src="{{asset('html/main/assets/images/menus/menu-01.jpg')}}" alt="予約倶楽部 （Basic）">
							</div>
							<div class="col-12 col-lg col-md-12">
								<div class="text-wrapper align-left">
									<h3 class="mbr-section-title mbr-fonts-style mb-4">【人気No.1】マーラーザリガニ炒め</h3>
									<p class="price mbr-fonts-style mb-4 display-7">2,728円（税込）</p>
									<p class="mbr-text mbr-fonts-style mb-4 display-7">看板メニュー★独自のルートで仕入れた一口サイズのザリガニをオリジナル麻辣ソースで炒めました！風味を保つために殻付きでご提供。頭抜きで剥きやすい！スパイスの風味が効いた麻辣ソースを引き締まった肉質でタンパク質もたっぷりのザリガニに絡めてどうぞ♪白酒、紹興酒…中国酒との相性抜群！（頭付きのものは要予約）</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="features15 cid-u74mItOMK3" id="features015-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 content-head">
					<div class="mbr-section-head mb-5">
						<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
							<strong>メニュー</strong>
						</h4>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($menus as $menu)
					@if ($menuTypes[$menu->menu_type] === 'ザリガニ料理')
					<div class="item features-without-image col-12 col-lg-4">
						<div class="item-wrapper">
							<div class="img-wrapper">
								<img src="{{ $menu->MainImagePath }}" alt="{{ $menu->name }}" class="menu-i-3">
							</div>
							<div class="card-box">
								<h4 class="card-title mbr-fonts-style mb-0 display-7">{{$menu->name}}</h4>
								<h5 class="card-text mbr-fonts-style mt-3 display-7">{{number_format($menu->price)}}円<small>(税込)</small></h5>
							</div>
						</div>
					</div>
					@endif
				@endforeach
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="features38 cid-u74mN1PMG4 mbr-parallax-background" id="features038-5" style="background-image: url({{asset('html/main/assets/images/menus/menu-04.jpg')}})">
		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg">
					<div class="text-wrapper align-left">
						<h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
							<strong>塩漬け卵黄ザリガニ炒め</strong>
						</h1>
						<p class="mbr-text align-left mbr-fonts-style mb-4 display-7">卵黄でコーティングしたジューシーなザリガニをご堪能ください。この一品は、従来のザリガニ料理とは一味違う、独自の美味しさを追求しています。それぞれのかみしめるたびに深まる風味が、お客様を魅了します。</p>
						<div class="mbr-section-btn align-left mt-3">
							<button class="btn btn-primary display-7">2,838円（税込）</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6 image-wrapper">
					<img class="w-100" src="{{asset('html/main/assets/images/menus/menu-02.jpg')}}" alt="予約倶楽部 （Basic）">
				</div>
			</div>
			<div class="row row-reverse justify-content-center">
				<div class="col-12 col-md-12 col-lg">
					<div class="text-wrapper align-left">
						<h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
							<strong>四川風白身魚と漬物の煮込み</strong>
						</h1>
						<p class="mbr-text align-left mbr-fonts-style mb-4 display-7">選び抜かれた新鮮な白身魚と、本場四川の香辛料を使ったこの特製煮込み料理をお楽しみください。酸味と辛味のバランスが絶妙で、お酒との相性も抜群です。</p>
						<div class="mbr-section-btn align-left mt-3">
							<button class="btn btn-primary display-7">1,848円（税込）</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6 image-wrapper">
					<img class="w-100" src="{{asset('html/main/assets/images/menus/menu-03.jpg')}}" alt="予約倶楽部 （Basic）">
				</div>
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="gallery3 cid-u74mCLwWxT" id="gallery03-6">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 content-head">
					<div class="mbr-section-head mb-5">
						<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2 text-light">
							<strong>ギャラリー</strong>
						</h4>
						<h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7 text-light">予約倶楽部 （Basic）ギャラリーでは、当店の特別な料理や心温まる雰囲気を写真でご覧いただけます。</h5>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($menus as $menu)
					@if(!empty($menu->MainImagePath))
						<div class="item features-image col-12 col-md-6 col-lg-2 active">
							<div class="item-wrapper">
								<div class="item-img">
									<img src="{{ $menu->MainImagePath }}" alt="{{ $menu->name }}" class="menu-i-3">
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</section>
	<section data-bs-version="5.1" class="features034 cid-u74mUcUxNN" id="features034-l">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 content-head pb-4">
					<div class="text-wrapper text-center">
						<h4 class="mbr-section-title mbr-fonts-style align-center mb-3 display-2 text-light animate__animated animate__delay-1s animate__fadeIn">
							<strong>お問い合わせ</strong>
						</h4>
						<p class="text-light">お電話からのお問い合わせもWEBからのお問い合わせも可能です。</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="item features-without-image col-12 col-lg-5">
					<div class="item-wrapper justify-content-center text-center bg-white py-5">
							<h2>お電話でのお問い合わせ</h2>
							<h2 class="py-3"><a href="tel:0352726080">03-5272-6080</a> </h2>
						<p>営業時間: 18:00 - 03:00</p>
					</div>
				</div>
				<div class="item features-without-image col-12 col-lg-5">
					<div class="item-wrapper justify-content-center text-center bg-white py-5">
						<h2>Webからのお問い合わせ</h2>
						<div class="d-flex flex-row justify-content-around align-items-center py-3 px-3">
							<a href="{{url('/contact')}}"><img src="{{asset('html/main/assets/images/mail.png')}}" class="h-50 rounded-2 w-100"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
