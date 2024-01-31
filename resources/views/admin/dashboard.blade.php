@extends('admin.adminLayout')

@section('adminHeader', 'Dashboard')

@section('adminBody')

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Slide</h5>
                    <p class="card-text">Bu bölümden anasayfadaki slide ları ekleyebilir ve silebilirsiniz</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Popüler Ürünler</h5>
                    <p class="card-text">Bu bölümden anasayfadaki popüler ürünler alanına kayıtlı ürünlerden ekleyebilir ve çıkarabilirsiniz</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Koleksiyonlar</h5>
                    <p class="card-text">Her kategori ile alakalı bir tane koleksiyon / katolog ekleyebilir ve silebilirsiniz </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Referanslar</h5>
                    <p class="card-text">Bu bölümde referansların işyeri adlarını ve referans adlarını ekleyebilir ve silebilirsiniz </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Hakkımızda</h5>
                    <p class="card-text">Bu bölümde Hakkımızda sayfasını düzenleyebilirsiniz </p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Kategoriler</h5>
                    <p class="card-text">Bu bölümde kategorileri isimleri ekleme silme ve düzenleme yapabilirsiniz</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Ürünler</h5>
                    <p class="card-text">Bu bölümden Ürünler ekleyebilir ve silebilirsiniz </p><br>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Tezgahlar</h5>
                    <p class="card-text">Bu bölümde ürünlere ait tezgahları ekleyebilir ve silebilirsiniz </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- İhtiyaç duyulan özel JS dosyalarını ekleyebilirsiniz -->
    <!-- Örneğin, bir çizgi grafiği veya pasta grafiği oluşturmak için Chart.js vb. -->
@endsection
