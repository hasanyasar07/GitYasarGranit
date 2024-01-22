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
                    <a class="post-modern-title" href="{{route('countertop',$product->id)}}">{{$product->name}}</a> | <a class="button-winona" href="{{route('countertop',$product->id)}}">Örnek Tezgahlar</a>
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
      <hr>
      <!-- Owl Carousel-->

      <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
        @foreach ($referances as $referance)
        <blockquote class="quote-classic">
            <div class="quote-classic-meta">
              <div class="quote-classic-avatar"><img src="uploads/tic.png" alt="" />
              </div>
              <div class="quote-classic-info">
                <cite class="quote-classic-cite">{{$referance->company}}</cite>
                <p class="quote-classic-caption">{{$referance->name}}</p>
              </div>
            </div>
          </blockquote>
        @endforeach
      </div>
    </div>
  </section>
@endsection

