
@extends('masterLayout')
@section('title')
{{$product->name;}}
@endsection
@section('body')
<div style="background-color: black; width: auto;height: 60px;" ></div>
<section class="section novi-background section-md text-center">
    <div class="container_koleksiyon " data-lightgallery="group">
      <h3 class="text-uppercase  wow-outer"><span class="wow slideInDown">{{$product->name;}} ÖRNEK ÜRÜNLER</span></h3>
      <hr>
      @if ($countertops->isEmpty())
      <div style="text-align: center;">
        <br>
        <br>
        <br>
          <h4>Bu Ürünün Henüz Örnek Resimleri Bulunmamaktadır.<br>
          Yakında Örnek Resimleri Sizlerle Buluşturacağız...</h4>
          <br>
        <br>
        <br>
      </div>
  @endif
      <div class="row row-lg-50 row-35 offset-top-2">
        @foreach ($countertops as $countertop)
        <div class="col-md-4 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
                <a class="post-modern-media" href="{{asset("uploads/$product->big_photo_path")}}" data-lightgallery="item" >
                    <img src="{{asset("uploads/$product->small_photo_path")}}" alt="" width="450" height="300"/>
                </a>
            </article>

          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
