<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Daftar Quizzes</h2>
<a href="{{ route('admin.quizzes.create') }}">+ Tambah Quizzes</a>

<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px">

@foreach($quizzes as $quiz)
<div style="border:1px solid #ddd;padding:16px;border-radius:8px">

  <h3>{{ $quiz->title }}</h3>
  <p>{{ $quiz->description }}</p>

  <small>{{ $quiz->questions_count }} soal</small>

  <div style="margin-top:12px;display:flex;gap:8px">
    <a href="{{ route('admin.quizzes.edit',$quiz) }}">Edit</a>

    <a href="{{ route('admin.quizzes.questions',$quiz) }}">
      Kelola Soal
    </a>

    <form
      method="POST"
      action="{{ route('admin.quizzes.destroy',$quiz) }}"
      onsubmit="return confirm('Yakin hapus quiz ini?')"
    >
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
  </div>

</div>
@endforeach

</div>
</div>
</body>
</html>
