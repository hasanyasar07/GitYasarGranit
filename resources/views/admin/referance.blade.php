@extends('admin.adminLayout')
@section('adminHeader')
Referanslar
@endsection


@section('adminBody')
<div class="text-right pr-4">
    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalStore"   >Ekle</a>
    </div>

    <div class="modal fade" id="ModalStore" tabindex="-1" role="dialog" aria-labelledby="ModalStoreLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalStoreLabel">Referans Ekle</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('referanceCreate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <!-- Form group start -->
                                <input type="text" name="company" class="form-control" placeholder="Şirket">
                                <!-- Form group end -->
                            </div>
                            <div class="col-sm-12 mb-3">
                                <!-- Form group start -->
                                <input type="text" name="name" class="form-control" placeholder="Ad Soyad">
                                <!-- Form group end -->
                            </div>
                            <div class="col-sm-12 mb-3">
                                <!-- Form group start -->
                                <button type="submit" class="btn btn-light">Ekle</button>
                                <!-- Form group end -->
                            </div>
                        </div>
                        <!-- Row end -->
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
                    <td class="text-left">Şirket</td>
                    <td class="text-left">Ad Soyad</td>
                    <td>İşlemler</td>

                </tr>
            </thead>
            @foreach ($referances as $referance)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5 text-left">{{$referance->company}}</div>
                    </td>
                    <td>
                        <div class="customer">
                            <div class="name fs-5 text-left">{{$referance->name}}</div>
                        </div>
                    </td>
                    <td>

                        <a href="{{route('referanceDelete',$referance->id)}}" class="btn btn-danger" >Sil</a>

                    </td>

            </tbody>
            @endforeach

        </table>
    </div>
</div>



@endsection
