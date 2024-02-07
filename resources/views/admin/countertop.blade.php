@extends('admin.adminLayout')
@section('adminHeader')
Ürünlerin Örnek Resimleri
@endsection


@section('adminBody')
<div class="text-right pr-4">
    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalStore"   >Ekle</a>
    </div>
<div class="modal fade" id="ModalStore" tabindex="-1" role="dialog"  aria-labelledby=" " aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ route('countertopCreate') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="product_name" class="form-label">Kategori</label>
                                    <select name="product_name" class="form-select">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li class="mb-3">
                                    <label for="photo" class="form-label">Resim (1200 X 800 pixels)</label>
                                    <input type="file" name="photo" class="form-control" id="photo" required>
                                    <small id="validation" class="form-text text-danger"></small>
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
                    <td>Resim Id</td>
                    <td>Ürün Adı</td>
                    <td>Fotoğraf</td>
                    <td>İşlemler</td>
                </tr>
            </thead>
            @foreach ($countertops as $countertop)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5">{{$countertop->id}}</div>
                    </td>
                    <td>
                        <div class="name fs-5">{{$countertop->product->name}}</div>
                    </td>
                    <td>
                        <img src="{{asset("public/uploads/$countertop->photo_path")}}" width="90" height="60">
                    </td>
                    <td>
                        <a href="{{route('countertopDelete',$countertop->id)}}" class="btn btn-danger" >Sil</a>
                    </td>
                </tbody>

            @endforeach

        </table>
    </div>
</div>

@endsection

@section("js")
<script>
    document.getElementById('photo').addEventListener('change', function() {
        var input = this;

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = new Image();

                img.onload = function() {
                    if (img.width != 1200 && img.height != 800) {
                        var validationLabelBig=document.getElementById('validation');
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

</script>

@endsection
