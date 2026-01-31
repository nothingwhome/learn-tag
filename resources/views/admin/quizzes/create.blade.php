<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Tambah Quizzes</h3>

<form method="POST" action="{{ route('admin.quizzes.store') }}">
@csrf
<input name="title" placeholder="Judul Quiz">
<textarea name="description" placeholder="Deskripsi"></textarea>
<button>Simpan</button>
</form>
</form>
</body>
</html>
