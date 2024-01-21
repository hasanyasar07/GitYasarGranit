@extends('admin.adminLayout')
@section('adminHeader')
Hakkımızda
@endsection
@section('adminBody')
<!-- resources/views/blog/create.blade.php -->
<div class="modal-body">
    <form action="{{ route('aboutUpdate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Row start -->
        <div class="row">

            <div>
                <textarea id="content" name="content"> {!! $about->content !!}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-light">Kaydet</button>
            </div>

        </div>
        <!-- Row end -->
    </form>
</div>





@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/osjtd85pgind64zg94inu4bj1i5yynflz7o9258utr2wx4vj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
    });
</script>
@endsection
