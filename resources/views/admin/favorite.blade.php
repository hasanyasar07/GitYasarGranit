@extends('admin.adminLayout')
@section('adminHeader')
Favorite
@endsection
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('adminBody')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <td>Kategori Adı</td>
                    <td>Ürün Adı</td>
                    <td>Fotoğraf</td>
                    <td>İşlemler</td>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5">{{$product->category->name}}</div>
                    </td>
                    <td>
                        <div class="name fs-5">{{$product->name}}</div>
                    </td>
                    <td>
                        <a href="#">{{$product->small_photo_path}}</a>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                        <input  type="checkbox" role="switch" class="favorite-switch form-check-input" data-product-id="{{ $product->id }}" {{ $product->is_favorite ? 'checked' : '' }}>
                        </div>
                    </td>
                </tbody>

            @endforeach

        </table>
    </div>
</div>
@endsection

@section('js')


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var checkboxes = document.querySelectorAll('.favorite-switch');

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                var productId = this.getAttribute('data-product-id');
                var isChecked = this.checked;

                // AJAX isteği gönder
                updateFavoriteStatus(productId, isChecked);
            });
        });

        function updateFavoriteStatus(productId, isChecked) {
            // AJAX isteği yapmak için XMLHttpRequest veya fetch API kullanabilirsiniz
            // Bu örnekte fetch API kullanılıyor
            fetch('favorite/update/' + productId, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ is_favorite: isChecked }),
            })
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(function (data) {
                // Başarılı bir şekilde güncellendiğinde yapılacak işlemler
                console.log(data);
            })
            .catch(function (error) {
                console.error('There was a problem with the fetch operation:', error);
            });
        }
    });
</script>

@endsection
