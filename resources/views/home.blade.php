@extends('masterLayout')
@section('title')
Çimstone
@endsection

@section('body')
<section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide_video" data-slide-bg="images/slide1.jpg">
        <div class="container">
          <div class="jumbotron-classic-content">
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">MÜŞTERİ MEMNUNİYETİ ÖNCELİĞİMİZDİR</span></h1>
            </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/slide2.jpg">
        <div class="container">
          <div class="jumbotron-classic-content">
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">TECRÜBE VE GÜVENİN ADRESİYİZ</span></h1>
             </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/slide3.jpg">
        <div class="container">
          <div class="jumbotron-classic-content">
            <div class="wow-outer">
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">1999'DAN BERİ HİZMETİNİZDEYİZ...</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination-outer container">
      <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
    </div>
  </section>
  <section class="section novi-background section-md text-center">
    <div class="container">
      <h3 class="text-uppercase  wow-outer"><span class="wow slideInDown">Popüler Ürünler</span></h3>
      <hr>
      <div class="row row-lg-50 row-35 offset-top-2">
        <div class="col-md-6 wow-outer">
          <!-- Post Modern-->
          <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer1.jpg" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a class="post-modern-title" href="#">Çimstone - Amanos </a></h4>
            <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Amanos Kod:160</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
          </article>
        </div>
        <div class="col-md-6 wow-outer">
          <!-- Post Modern-->
          <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer2.jpg" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a class="post-modern-title" href="#">Çimstone - Milos</a></h4>
            <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Milos Kod:290</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
          </article>
        </div>
        <div class="col-md-6 wow-outer">
          <!-- Post Modern-->
          <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer3.jpg" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a class="post-modern-title" href="#">Granit - Aksaray Yaylak</a></h4>
            <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Menşei: Yerli - (Türkiye - Aksaray)</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
          </article>
        </div>
        <div class="col-md-6 wow-outer">
          <!-- Post Modern-->
          <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer4.jpg" alt="" width="571" height="353"/></a>
            <h4 class="post-modern-title"><a class="post-modern-title" href="#">Granit - Azul Platino</a></h4>
            <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Menşei: İthal - İspanya</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
          </article>
        </div>
        <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer5.jpg" alt="" width="571" height="353"/></a>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">Mermerit - Grapol</a></h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Mermerit Kod:110</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
            </article>
          </div>
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Populer6.jpg" alt="" width="571" height="353"/></a>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">Mermerit - Grapol</a></h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">Ürün Detayları</a></li>
                <li>Mermerit Kod:160</li>
                <li><a class="button-winona" href="#">Örnek Tezgahlar</a></li>
            </ul>
            </article>
          </div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="section novi-background section-lg text-center padding">
    <div class="container">
      <h3 class="text-uppercase  wow-outer"><span class="wow slideInDown">KOLEKSİYONLAR</span></h3>
      <p><span class="text-width-1">Çimston, Granit ve Mermerit Koleksiyonları Detaylarında Farklı Renk Seçeneklerini ve Bu Renklere Ait Hazırlanmış Örnek Tezgahları Bulabilirsiniz...</span></p>
      <hr>
      <div class="row row-35 row-xxl-70 offset-top-2">
        <div class="col-sm-12 col-lg-4">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/CimstoneKatalog.jpg" alt="" width="270" height="300"/></a>
            <h4 class="thumbnail-light-title"><a href="#">Çimstone Koleksiyon</a></h4>
          </article>
        </div>
        <div class="col-sm-12 col-lg-4">
            <!-- Thumbnail Light-->
            <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/GranitKatalog.jpg" alt="" width="270" height="300"/></a>
              <h4 class="thumbnail-light-title"><a href="#">Granit Koleksiyon</a></h4>
            </article>
          </div>
        <div class="col-sm-12 col-lg-4">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/MermeritKatalog.jpg" alt="" width="270" height="300"/></a>
            <h4 class="thumbnail-light-title"><a href="#">Mermerit Koleksiyon</a></h4>
          </article>
        </div>
      </div>
    </div>
  </section>


  <section class="section novi-background section-lg text-center">
    <div class="container">
      <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">REFERANSLAR</span></h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">The Color Otel</cite>
              <p class="quote-classic-caption">Genel Müdür Ahmet Konuk</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>I have just bought an apartment in LA thanks to you and your brokers. Everything went smooth and easy, the price was quite affordable, and I’m sure I will use your services again in the future.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Sun Bella Seher Otel</cite>
              <p class="quote-classic-caption">Genel Müdür Mehmet Kalkan</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>I have recently sold my rental property in Nelson via inHouse. Everything about the sale was made seamless by your team. You gave me great advice about what was necessary to expedite the sale.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Ünal İnşaat</cite>
              <p class="quote-classic-caption">Akif Ünal</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>I really appreciate your time and expertise in helping me find and buy my current home in Seattle, WA. Hope we can do business again in the future and I will recommend you to family and friends.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Bill Warner</cite>
              <p class="quote-classic-caption">Regular Client</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>I have just sold a property with inHouse and I can’t thank them enough. Their team has great communication skills and they have regularly communicated with me throughout the whole process.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Cambazoğlu Kuaför</cite>
              <p class="quote-classic-caption">Salih Cambazoğlu</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>Your skilled team helped me make the dream of selling my old property a reality. The sale went smoothly, and I just closed on an ideal new place I am excited to call home. Thank you for your great services!</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96"/>
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Acar Bot</cite>
              <p class="quote-classic-caption">Mehmet Fatih Acar</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>I have to say that inHouse has the best brokers we've ever worked with. Their professionalism, personality, attention to detail, responsiveness and ability to close the deal are outstanding!</p>
          </div>
        </blockquote>
      </div>
    </div>
  </section>
@endsection

