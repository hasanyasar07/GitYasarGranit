@extends('admin.adminLayout')

@section('adminHeader', 'Dashboard')

@section('adminBody')
    <h2 class="card-title mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Toplam Kullanıcı Sayısı</h5>
                    <p class="card-text">250</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Toplam Ürün Sayısı</h5>
                    <p class="card-text">500</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Günlük Ziyaretçi Sayısı</h5>
                    <p class="card-text">1000</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Günlük Aktiviteler</h5>
                    <!-- Buraya istediğiniz grafik veya aktivite listesini ekleyebilirsiniz -->
                    <!-- Örneğin bir çizgi grafiği, pasta grafiği, vb. -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- İhtiyaç duyulan özel JS dosyalarını ekleyebilirsiniz -->
    <!-- Örneğin, bir çizgi grafiği veya pasta grafiği oluşturmak için Chart.js vb. -->
@endsection
