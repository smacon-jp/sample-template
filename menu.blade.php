@extends('main.layout.app')
@section('title', 'MENU')
@section('content')
<div class="background-wrapper">
    <section class="about container">
      <div class="about-wrapper menu-content">
        <h1>おしながき</h1>
        <p>
          五感で味わう、贅沢なひとときを。 <br />
          当店は、厳選された最高品質の素材を使用し、<br />
          職人技を駆使して作り上げる高級鉄板料理の専門店です。<br />
          豊富なメニューとこだわりのサービスで、お客様をおもてなしいたします。<br />
        </p>
      </div>
    </section>

    <section class="food-gallery">
      <div class="food-gallery-container" id="food-gallery-container">
        <div class="food-gallery-slide" id="food-gallery-slide">
          <div class="food-image-item">
            <img src="https://placehold.co/300x200" alt="Food Image 1" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 2" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 3" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 4" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 5" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 6" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 7" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 8" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 9" />
          </div>
          <div class="food-image-item">
            <img src="https://placehold.co/500x400" alt="Food Image 10" />
          </div>
        </div>
      </div>
      <div class="group-button">
        <a id="food-prev">&#10094;</a>
        <a id="food-next">&#10095;</a>
      </div>
    </section>

    <section class="menu-details mb-10 container" id="food">
      <h2>お食事</h2>
      <div class="menu-item">
        <p class="label">鉄板焼き和牛ステーキ</p>
        <p class="value">¥10,000</p>
      </div>
      <div class="menu-item">
        <p class="label">シーフード鉄板焼き</p>
        <p class="value">¥12,000</p>
      </div>
      <div class="menu-item">
        <p class="label">季節の野菜鉄板焼き</p>
        <p class="value">¥6,000</p>
      </div>
      <div class="menu-item">
        <p class="label">フォアグラの鉄板焼き</p>
        <p class="value">¥8,000</p>
      </div>
      <div class="menu-item">
        <p class="label">トリュフの鉄板焼き</p>
        <p class="value">¥12,000</p>
      </div>
      <div class="menu-item">
        <p class="label">鉄板焼き寿司</p>
        <p class="value">¥ 9,000</p>
      </div>
      <div class="menu-item">
        <p class="label">ローストビーフの鉄板焼き</p>
        <p class="value">¥7,000</p>
      </div>
      <div class="menu-item">
        <p class="label">焼きそば、チャーハンなどの定番料理</p>
        <p class="value">¥3,000</p>
      </div>
      <div class="menu-item">
        <p class="label">季節のフルーツ盛り合わせ</p>
        <p class="value">¥2,000</p>
      </div>
      <p class="menu-details-description">
        ※料金は税別で表示しております。<br />
        また、季節によってメニュー内容や料金が変更する場合があります。
      </p>
    </section>

    <section class="menu-details container" id="drinks">
      <h2>お飲み物</h2>
      <div class="menu-item">
        <p class="label">スパークリングワイン</p>
        <p class="value">グラス¥750円、ボトル¥5,000〜</p>
      </div>
      <div class="menu-item">
        <p class="label">白ワイン</p>
        <p class="value">グラス¥800、ボトル¥5,500〜</p>
      </div>
      <div class="menu-item">
        <p class="label">赤ワイン</p>
        <p class="value">グラス¥850、ボトル¥6,000〜</p>
      </div>
      <div class="menu-item">
        <p class="label">日本酒</p>
        <p class="value">グラス¥800、一合¥3,000〜</p>
      </div>
      <div class="menu-item">
        <p class="label">焼酎</p>
        <p class="value">グラス¥700〜、ボトル¥4,000〜</p>
      </div>
      <div class="menu-item">
        <p class="label">ウイスキー</p>
        <p class="value">
          シングルモルト、ブレンデッド、<br />
          グラス¥800〜、ボトル¥8,000〜
        </p>
      </div>
      <div class="menu-item">
        <p class="label">カクテル</p>
        <p class="value">
          マティーニ、モスコミュール、カイピリーニャなど<br />
          ¥800〜
        </p>
      </div>
      <div class="menu-item">
        <p class="label">ソフトドリンク</p>
        <p class="value">
          オレンジジュース、アップルジュース、ウーロン茶など <br />
          ¥500〜
        </p>
      </div>

      <p class="menu-details-description">
        ※ドリンクメニューは季節によって変更する場合があります。
      </p>
    </section>
  </div>
@endsection

@push('scripts')
<script>
     const slide = document.getElementById("food-gallery-slide");
      const nextButton = document.getElementById("food-next");
      const prevButton = document.getElementById("food-prev");

      let currentPosition = 0;
      const slideWidth = 300; // Width of each image item including margin
      const maxSlides = document.querySelectorAll(".food-image-item").length;
      const visibleImages = 3; // Number of images visible at once
      const totalWidth = slideWidth * maxSlides + (maxSlides - 1) * 10; // Total width of all images plus spacing
      let autoScrollInterval;

      // Function to move slides
      function moveSlide(direction) {
        const maxPosition = -(maxSlides - visibleImages) * (slideWidth + 10); // Maximum scrollable width

        if (direction === "next") {
          if (currentPosition > maxPosition) {
            currentPosition -= slideWidth + 10; // Move to the next image
          } else {
            currentPosition = 0; // Reset to the first image
          }
        } else if (direction === "prev") {
          if (currentPosition < 0) {
            currentPosition += slideWidth + 10; // Move to the previous image
          }
        }

        slide.style.transform = `translateX(${currentPosition}px)`;
      }

      // Auto-scroll function
      function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
          moveSlide("next");
        }, 3000); // Change slide every 3 seconds
      }

      // Stop auto-scroll when button is clicked
      function stopAutoScroll() {
        clearInterval(autoScrollInterval);
      }

      // Event listeners for manual navigation
      nextButton.addEventListener("click", () => {
        moveSlide("next");
        stopAutoScroll(); // Stop auto-scroll when manually clicked
        startAutoScroll(); // Restart auto-scroll after manual action
      });

      prevButton.addEventListener("click", () => {
        moveSlide("prev");
        stopAutoScroll(); // Stop auto-scroll when manually clicked
        startAutoScroll(); // Restart auto-scroll after manual action
      });

      // Start auto-scroll when the page loads
      window.addEventListener("load", startAutoScroll);
  </script>
    
@endpush
