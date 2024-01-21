@extends('masterLayout')
@section('title')
Çimstone
@endsection

@section('body')
<section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
    <div class="swiper-wrapper">
     @foreach ($slides as $slide)
     <div class="swiper-slide swiper-slide_video" data-slide-bg="{{asset("uploads/$slide->photo_path")}}">
        <div class="container">
          <div class="jumbotron-classic-content">
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">{{$slide->header}}</span></h1>
            </div>
        </div>
      </div>

     @endforeach

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
        @foreach ($favorites as $product)
        <div class="col-md-4 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
                <a class="post-modern-media" href="{{asset("uploads/$product->big_photo_path")}}" data-lightgallery="item" data-sub-html="<p>{{$product->name}}</p>">
                    <img src="{{asset("uploads/$product->small_photo_path")}}" alt="" width="450" height="300"/>
                </a>
                <h5 class="post-modern-title">
                    <a class="post-modern-title" href="#">{{$product->name}}</a> | <a class="button-winona" href="#">Örnek Tezgahlar</a>
                </h5>
            </article>

          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="section novi-background section-lg text-center padding">
    <div class="container">
      <h3 class="text-uppercase  wow-outer"><span class="wow slideInDown">KOLEKSİYONLAR</span></h3>
      <p><span class="text-width-1">Koleksiyonların Detaylarında Farklı Renk Seçeneklerini ve Bu Renklere Ait Hazırlanmış Örnek Tezgahları Bulabilirsiniz...</span></p>
      <hr>
      <div class="row row-lg-50 row-35 offset-top-2">
        @foreach ($collections as $collection)
        <div class="col-md-4 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
                <a class="post-modern-media" href="{{route('category',$collection->category_id)}}">
                    <img src="{{asset("uploads/$collection->photo_path")}}" alt="" width="450" height="300"/>
                </a>
                <h4 class="thumbnail-light-title"><a href="{{route('category',$collection->category_id)}}">{{$collection->category->name}} Koleksiyon</a></h4>
            </article>

          </div>
        @endforeach
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

