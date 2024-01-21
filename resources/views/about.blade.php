@extends('masterLayout')
@section('title')
Hakkımızda
@endsection
@section('body')
<div style="background-color: black; height: 55px;"> </div>
<br>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-12">
            {!! $about->content !!}
        </div>
    </div>
</div>

@endsection
