@extends('masterLayout')
@section('title')
Çimstone
@endsection
@section('body')
  <!-- Breadcrumbs -->
  <section class="section novi-background breadcrumbs-custom bg-image context-dark" style="background-image: url(images/iletisim.jpg);">
    <div class="breadcrumbs-custom-inner">
      <div class="container breadcrumbs-custom-container">
        <div class="breadcrumbs-custom-main">

          <h2 class="text-uppercase breadcrumbs-custom-title font-weight-bold">İLETİŞİM ADRESLERİMİZ</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="section novi-background section-sm">
    <div class="container">
      <div class="layout-bordered">
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon novi-icon icon-lg mdi mdi-phone text-primary"></div>
            <ul class="list-0">
              <li><a class="link-default" href="tel:#">Mehmet YAŞAR - 0533 731 1846</a></li>
              <li><a class="link-default" href="tel:#">İsa YAŞAR - 0536 522 8261</a></li>
            </ul>
          </div>
        </div>
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon novi-icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">yasar07600@gmail.com</a>
          </div>
        </div>
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon novi-icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">Alanya Yolu Üzeri Ulualan Mevkii No: 42/1 Manavgat/ANTALYA</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section novi-background bg-gray-100">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 height-fill wow fadeIn">
                <p></p>
                <div class="clearfix visible-lg-block visible-md-block text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204339.0659566304!2d31.156183347321786!3d36.84731582850519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe92c0d9bab9656b!2sYa%C5%9Far+Granit+ve+Mermerit!5e0!3m2!1str!2str!4v1489698829042" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
