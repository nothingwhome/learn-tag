<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Edit Quizzes</h3>

<form method="POST" action="{{ route('admin.quizzes.update', $quiz) }}">
@csrf
@method('PUT')

<input
  type="text"
  name="title"
  placeholder="Judul Quiz"
  value="{{ old('title', $quiz->title) }}"
>

<textarea
  name="description"
  placeholder="Deskripsi"
>{{ old('description', $quiz->description) }}</textarea>

<button type="submit">Update</button>
</form>

<a href="{{ route('admin.quizzes.index') }}">← Kembali</a>
</body>
</html>
