@extends('main.layout.app')
@section('title', 'TOP')
@section('content')
<section class="banner">
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade banner-carousel"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="{{ asset('yoyaku-lp-assets/images/banner.webp') }}"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{ asset('yoyaku-lp-assets/images/banner.webp') }}"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{ asset('yoyaku-lp-assets/images/banner.webp') }}"
            alt="Third slide"
          />
        </div>
      </div>
    </div>
  </section>

<section class="py-5">
  <div class="container">
    <div class="news-container py-5 px-3 border rounded">
      <h3 class="fw-bold text-center pb-5">お知らせ</h3>
      @foreach($news as $shop_news)
        <div class="row justify-content-center item mb-5">
          <div class="col-12 col-lg-2">
            <h5 class="fw-light mbr-fonts-style mt-0 mb-3">{{date('Y.m.d', strtotime($shop_news->published_date))}}</h5>
          </div>
          <div class="col-12 col-lg-6">
            <h6 class="fw-light mbr-fonts-style mt-0 mb-3">
              <a href="/news/{{$shop_news->slug}}" class="news-list__link">{{$shop_news->title}}<i class="news-list__icn">→</i></a>
            </h6>
          </div>
        </div>
      @endforeach
      <div class="d-flex justify-content-center">
        <a href="/news/" class="btn btn-primary animate__animated animate__delay-1s animate__fadeIn">ニュースページへ &nbsp; →</a>
      </div>
    </div>
  </div>
</section>

  <section class="about" id="about">
    <div class="about-wrapper">
      <h1>五感で味わう、<br />　至極の鉄板焼き。<br /></h1>
      <p>
        五感で味わう、贅沢なひとときを。<br />当店では、最高級の食材を使用し、鉄板焼きの技術と繊細な味付けで、<br />お客様の五感を刺激する至極の料理を提供しています。<br />また、厳選された日本酒やワインと共に、<br />お食事をより一層華やかに演出します。<br />丁寧な仕事とこだわりの素材を使い、<br />お客様に極上の食体験を提供いたします。<br />
      </p>
    </div>
  </section>

  <section class="menu-banner" id="menu">
    <hr />
    <h2>おしながき</h2>
  </section>

  <section class="menu">
    <div class="menu-wrapper">
      <div class="menu-item">
        <div class="menu-image">
          <img
            src="https://placehold.co/500x400"
            alt="ステーキコース Image"
          />
        </div>
        <div class="menu-description">
          <h2>ステーキコース</h2>
          <p>
            当店自慢のステーキコースは、特選の黒毛和牛を贅沢に使用し、一流の味わいをお届けするコースです。厳選されたお肉を熟練のシェフが丁寧に焼き上げ、口の中でとろけるような食感をお楽しみいただけます。贅沢な香りとジューシーな肉汁が口いっぱいに広がり、感動的な味わいをご堪能いただけます。
            当店自慢の鉄板焼き技術と上質な食材が融合した、至福のひとときをお約束いたします。ゆったりとした空間で、大切な方との特別な食事やお祝い、記念日などにぜひご利用ください。お客様の心に残る最高の食体験を提供いたします。
          </p>
        </div>
      </div>
      <div class="menu-item">
        <div class="menu-description">
          <h2>ステーキコース</h2>
          <p>
            当店自慢のステーキコースは、特選の黒毛和牛を贅沢に使用し、一流の味わいをお届けするコースです。厳選されたお肉を熟練のシェフが丁寧に焼き上げ、口の中でとろけるような食感をお楽しみいただけます。贅沢な香りとジューシーな肉汁が口いっぱいに広がり、感動的な味わいをご堪能いただけます。
            当店自慢の鉄板焼き技術と上質な食材が融合した、至福のひとときをお約束いたします。ゆったりとした空間で、大切な方との特別な食事やお祝い、記念日などにぜひご利用ください。お客様の心に残る最高の食体験を提供いたします。
          </p>
        </div>
        <div class="menu-image">
          <img
            src="https://placehold.co/500x400"
            alt="ステーキコース Image"
          />
        </div>
      </div>
      <div class="button">
        <a href="menus#food" class="btn btn-primary"
          >お食事の詳細はこちら</a
        >
      </div>
    </div>
  </section>

  <section class="menu-banner" id="drinks">
    <hr />
    <h2>おしながき</h2>
  </section>

  <section class="menu">
    <div class="menu-wrapper">
      <div class="menu-item">
        <div class="menu-image">
          <img
            src="https://placehold.co/500x400"
            alt="ステーキコース Image"
          />
        </div>
        <div class="menu-description">
          <h2>ステーキコース</h2>
          <p>
            当店自慢のステーキコースは、特選の黒毛和牛を贅沢に使用し、一流の味わいをお届けするコースです。厳選されたお肉を熟練のシェフが丁寧に焼き上げ、口の中でとろけるような食感をお楽しみいただけます。贅沢な香りとジューシーな肉汁が口いっぱいに広がり、感動的な味わいをご堪能いただけます。
            当店自慢の鉄板焼き技術と上質な食材が融合した、至福のひとときをお約束いたします。ゆったりとした空間で、大切な方との特別な食事やお祝い、記念日などにぜひご利用ください。お客様の心に残る最高の食体験を提供いたします。
          </p>
        </div>
      </div>
      <div class="menu-item">
        <div class="menu-description">
          <h2>ステーキコース</h2>
          <p>
            当店自慢のステーキコースは、特選の黒毛和牛を贅沢に使用し、一流の味わいをお届けするコースです。厳選されたお肉を熟練のシェフが丁寧に焼き上げ、口の中でとろけるような食感をお楽しみいただけます。贅沢な香りとジューシーな肉汁が口いっぱいに広がり、感動的な味わいをご堪能いただけます。
            当店自慢の鉄板焼き技術と上質な食材が融合した、至福のひとときをお約束いたします。ゆったりとした空間で、大切な方との特別な食事やお祝い、記念日などにぜひご利用ください。お客様の心に残る最高の食体験を提供いたします。
          </p>
        </div>
        <div class="menu-image">
          <img
            src="https://placehold.co/500x400"
            alt="ステーキコース Image"
          />
        </div>
      </div>
      <div class="button">
        <a href="menus#drinks" class="btn btn-primary"
          >お食事の詳細はこちら</a
        >
      </div>
    </div>
  </section>

  <section class="store-information" id="store">
    <img src="https://placehold.co/500x400" alt="Image 1" />
    <div class="store-details">
      <h2>店舗情報</h2>
      <div class="store-row">
        <p class="label">店名</p>
        <p class="value">牛金草雞</p>
      </div>
      <div class="store-row">
        <p class="label">住所</p>
        <p class="value">
          〒100-6390 <br />
          東京都千代田区丸の内２丁目４−１
        </p>
      </div>
      <div class="store-row">
        <p class="label">アクセス</p>
        <p class="value">
          JR総武線・中央線「東京駅」徒歩1分 <br />
          メトロ各線「大手町駅」徒歩3分
        </p>
      </div>
      <div class="store-row">
        <p class="label">営業時間</p>
        <p class="value">
          【昼の部】 11:30～14:30（L.O.13:30）※完全予約制 <br />
          【夜の部】 17:00～22:00（L.O.21:00）
        </p>
      </div>
      <div class="store-row">
        <p class="label">座席数</p>
        <p class="value">30席</p>
      </div>
    </div>
  </section>

  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14137.09325337691!2d85.3213184!3d27.64701445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1728307643132!5m2!1sen!2snp"
      width="100%"
      height="450"
      style="border: 0; padding: 0px; margin: 0px"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>

  <section class="reservation" id="reservation">
    <h2>ご予約・お問い合わせ</h2>
    <form id="reservationForm" class="reservation-form" novalidate>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required />
        <span class="error-message" id="date-error"
          >Please select a date.</span
        >
      </div>

      <div class="form-group">
        <label for="people">Number of People:</label>
        <input type="number" id="people" name="people" min="1" required />
        <span class="error-message" id="people-error"
          >Please enter the number of people.</span
        >
      </div>

      <div class="form-group">
        <label for="time">Select Time:</label>
        <select id="time" name="time" required>
          <option value="">Select time</option>
          <option value="11:00">11:00 AM</option>
          <option value="12:00">12:00 PM</option>
          <option value="1:00">1:00 PM</option>
          <option value="6:00">6:00 PM</option>
          <option value="7:00">7:00 PM</option>
          <option value="8:00">8:00 PM</option>
        </select>
        <span class="error-message" id="time-error"
          >Please select a time.</span
        >
      </div>

      <div class="form-group form-submit">
        <a href="reservation" class="btn btn-primary">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>WEB予約はこちら
        </a>
      </div>
    </form>
  </section>

  <section class="gallery">
    <div class="gallery-container" id="gallery-container">
      <div class="gallery-slide">
        <div class="image-item">
          <img src="https://placehold.co/300x200" alt="Image 1" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200" alt="Image 2" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200" alt="Image 3" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 4" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 5" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 6" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 7" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 8" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 9" />
        </div>
        <div class="image-item">
          <img src="https://placehold.co/300x200 " alt="Image 10" />
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
    // Initialize Carousel with custom options
    $("#carouselExampleFade").carousel({
      interval: 3000, // 3 seconds between slides
      wrap: true, // Enable looping
    });
  </script>

@endpush
