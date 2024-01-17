<!DOCTYPE html>
<html>
<head>
    <title>Resim Yükleme Formu</title>
</head>
<body>

<h2>Resim Yükleme Formu</h2>

<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image">
    <br><br>

    <button type="submit">Resim Yükle</button>
</form>

</body>
</html>
