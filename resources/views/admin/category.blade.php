@extends('admin.adminLayout')
@section('adminHeader')
Kategoriler
@endsection


@section('adminBody')
<div class="text-right pr-4">
    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalStore"   >Ekle</a>
    </div>

<div class="modal fade" id="ModalStore" tabindex="-1" role="dialog"  aria-labelledby=" " aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{route('categoryCreate')}}" method="POST">
                    @csrf
                                <!-- Row start -->
                                <div class="row">
                                    <div class="col-sm-10 col-12">
                                        <!-- Form group start -->
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Kategori İsmi">
                                        </div>
                                        <!-- Form group end -->

                                    </div>
                                    <div class="col-sm-2 col-12">
                                        <!-- Form group start -->
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-light">Ekle</button>
                                        </div>
                                        <!-- Form group end -->

                                    </div>
                                </div>
                                <!-- Row end -->
                </form>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>



<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <td>Kategoti Id</td>
                    <td class="text-left">Kategori Adı</td>
                    <td>İşlemler</td>

                </tr>
            </thead>
            @foreach ($categories as $category)
            <tbody>
                <tr>
                    <td>
                        <div class="name fs-5">{{$category->id}}</div>
                    </td>
                    <td>
                        <div class="customer">
                            <div class="name fs-5 text-left">{{$category->name}}</div>
                        </div>
                    </td>
                    <td>
                        @if (!$category->deleted_at)
                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalEdit{{$category->id}}" data-name={{$category->name}} data-id={{$category->id}}  >Güncelle</a>
                        <a href="{{route('categoryDelete',$category->id)}}" class="btn btn-danger" >Sil</a>
                        @else
                        <a href="{{route('categoryRestore',$category->id)}}" class="btn btn-warning" >Geri Getir</a>
                        @endif


<div class="modal fade" id="ModalEdit{{$category->id}}" tabindex="-1" role="dialog"  aria-labelledby=" productModalLabel{{ $category->name }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{route('categoryUpdate')}}" method="POST">
                    @csrf
                                <!-- Row start -->
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <!-- Form group start -->
                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{$category->id}}"  class="form-control">

                                            <input type="text" name="name" value="{{$category->name}}" class="form-control">



                                        </div>
                                        <!-- Form group end -->

                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <!-- Form group start -->
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Güncelle</button>
                                        </div>
                                        <!-- Form group end -->

                                    </div>
                                </div>
                                <!-- Row end -->
                </form>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


                    </td>
            </tbody>
            @endforeach

        </table>
    </div>
</div>



@endsection
