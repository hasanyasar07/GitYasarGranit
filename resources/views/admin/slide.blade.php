@extends('admin.adminLayout')
@section('adminHeader')
Slide
@endsection


@section('adminBody')
<div class="text-right pr-4">
    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalStore"   >Ekle</a>
    </div>
<div class="modal fade" id="ModalStore" tabindex="-1" role="dialog"  aria-labelledby=" " aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ route('slideCreate') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="name" class="form-label">Resim Yazısı</label>
                                    <input type="text" name="header" class="form-control" placeholder="Enter Slide Header" required>
                                </li>
                                <li class="mb-3">
                                    <label for="photo" class="form-label">Resim (1920 X 968 pixels)</label>
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
                    <td>Slide Id</td>
                    <td>Resim Yazısı</td>
                    <td>Fotoğraf</td>
                    <td>İşlemler</td>
                </tr>
            </thead>
            @foreach ($slides as $slide)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5">{{$slide->id}}</div>
                    </td>
                    <td>
                        <div class="name fs-5">{{$slide->header}}</div>
                    </td>
                    <td>
                        <a href="#">{{$slide->photo_path}}</a>
                    </td>
                    <td>
                        <a href="{{route('slideDelete',$slide->id)}}" class="btn btn-danger" >Sil</a>
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
                    if (img.width != 1920 && img.height != 968) {
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
