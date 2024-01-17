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

          <h3 class="text-uppercase breadcrumbs-custom-title">İLETİŞİM ADRESLERİMİZ</h3>
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
            <div class="icon novi-icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">yasar07600@hotmail.com</a>
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
    <div class="range justify-content-xl-between">
      <div class="cell-xl-6 align-self-center container">
        <div class="row">
          <div class="col-lg-9 cell-inner">
            <div class="section-lg">
              <h3 class="text-uppercase wow-outer"><span class="wow slideInDown">BİZİMLE İLETİŞİME GEÇİN</span></h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                @csrf
                <div class="row row-10">
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-first-name">İsim</label>
                      <input class="form-input" id="contact-first-name" type="text" name="name" Required>
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-last-name">Soyisim</label>
                      <input class="form-input" id="contact-last-name" type="text" name="name" Required>
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-email">E-mail</label>
                      <input class="form-input" id="contact-email" type="email" name="email" Required>
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-phone">Telefon</label>
                      <input class="form-input" id="contact-phone" type="text" name="phone" Required>
                    </div>
                  </div>
                  <div class="col-12 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-message">Mesajınız</label>
                      <textarea class="form-input" id="contact-message" name="message" Required></textarea>
                    </div>
                  </div>
                </div>
                <div class="group group-middle">
                  <div class="wow-outer">
                    <button class="button button-primary button-winona wow slideInRight" type="submit">Mesajı Gönder</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cell-xl-6 height-fill wow fadeIn">
                <p></p>
                <div  class="clearfix visible-lg-block visible-md-block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204339.0659566304!2d31.156183347321786!3d36.84731582850519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe92c0d9bab9656b!2sYa%C5%9Far+Granit+ve+Mermerit!5e0!3m2!1str!2str!4v1489698829042" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
      </div>
    </div>
  </section>

@endsection
