
@extends('masterLayout')
@section('title')
{{$category->name;}}
@endsection
@section('body')
<div style="background-color: black; width: auto;height: 60px;" ></div>
<section class="section novi-background section-md text-center">
    <div class="container_koleksiyon " data-lightgallery="group">
      <h3 class="text-uppercase  wow-outer"><span class="wow slideInDown">{{$category->name;}} KOLEKSİYONU</span></h3>
      <hr>
      <div class="row row-lg-50 row-35 offset-top-2">
        @foreach ($products as $product)
        <div class="col-md-4 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft"><a class="post-modern-media" href={{asset("uploads/$product->big_photo_path")}} data-lightgallery="item"><img src={{asset("uploads/$product->small_photo_path")}} alt="" width="450" height="300"/></a>
              <h5 class="post-modern-title"><a class="post-modern-title" href="#">{{$product->name}} </a> | <a class="button-winona" href="#">Örnek Tezgahlar</a></h5>
            </article>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
