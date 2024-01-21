@extends('admin.adminLayout')
@section('adminHeader')
Ürünler
@endsection


@section('adminBody')
<div class="text-right pr-4">
    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalStore"   >Ekle</a>
    </div>

<div class="modal fade" id="ModalStore" tabindex="-1" role="dialog"  aria-labelledby=" " aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ route('productCreate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-12 d-flex justify-content-end mb-3">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="col-sm-12 col-12">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <label for="category_name" class="form-label">Kategori</label>
                                    <select name="category_name" class="form-select">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li class="mb-3">
                                    <label for="name" class="form-label">Ürün Adı</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name" required>
                                </li>
                                <li class="mb-3">
                                    <label for="big_photo" class="form-label"> Büyük Resim (1200 X 800 pixels)</label>
                                    <input type="file" name="big_photo" class="form-control" id="big_photo" required>
                                    <small id="validation_big" class="form-text text-danger"></small>
                                </li>
                                <li class="mb-3">
                                    <label for="small_photo" class="form-label">Küçük Resim (450 X 300 pixels)</label>
                                    <input type="file" name="small_photo" class="form-control" id="small_photo" required>
                                    <small id="validation_small" class="form-text text-danger"></small>
                                </li>
                                <li class="mb-3">
                                    <button type="submit" class="btn btn-light">Ekle</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>



<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <td>Ürün Id</td>
                    <td>Category Adı</td>
                    <td>Ürün Adı</td>
                    <td>Büyük Fotoğraf</td>
                    <td>Küçük Fotoğraf</td>
                    <td>İşlemler</td>

                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5">{{$product->id}}</div>
                    </td>
                    <td>
                        <div class="name fs-5">{{$product->category->name}}</div>
                    </td>
                    <td>
                        <div class="customer">
                            <div class="name fs-5 text-left">{{$product->name}}</div>
                        </div>
                    </td>
                    <td>
                        <img src="{{asset("uploads/$product->big_photo_path")}}" width="90" height="60">
                    </td>
                    <td>
                        <img src="{{asset("uploads/$product->small_photo_path")}}" width="90" height="60">
                    </td>
                    <td>
                        <a href="{{route('productDelete',$product->id)}}" class="btn btn-danger" >Sil</a>
                    </td>
                </tbody>

            @endforeach

        </table>
    </div>
</div>



@endsection

@section("js")
<script>
    document.getElementById('big_photo').addEventListener('change', function() {
        var input = this;

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = new Image();

                img.onload = function() {
                    if (img.width != 1200 && img.height != 800) {
                        var validationLabelBig=document.getElementById('validation_big');
                        validationLabelBig.innerHTML="Yanlış boyutlu resim girdiniz";
                        input.value = '';
                        setTimeout(function() {
                        validationLabelBig.innerHTML = "";}, 2000);
                    }
                };

                img.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    });

    document.getElementById('small_photo').addEventListener('change', function() {
        var input = this;

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = new Image();

                img.onload = function() {
                    if (img.width != 450 && img.height != 300) {
                        var validationLabelSmall=document.getElementById('validation_small');
                        validationLabelSmall.innerHTML="Yanlış boyutlu resim girdiniz";
                        input.value = '';
                        setTimeout(function() {
                        validationLabelSmall.innerHTML = "";}, 2000);
                    }
                };

                img.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    });
</script>

@endsection
