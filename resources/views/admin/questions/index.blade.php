<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Soal - {{ $quiz->title }}</h2>

<p>Jumlah soal: {{ $questions->count() }}</p>

@if($questions->count() < 5)
<p style="color:red">Minimal 5 soal</p>
@endif

<hr>

<form method="POST">
@csrf
<input name="question" placeholder="Pertanyaan">

<input name="option_a" placeholder="Opsi A">
<input name="option_b" placeholder="Opsi B">
<input name="option_c" placeholder="Opsi C">
<input name="option_d" placeholder="Opsi D">

<select name="correct_answer">
  <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option>
</select>

<button>Tambah Soal</button>
</form>

<hr>

@foreach($questions as $q)
<div style="border:1px solid #ccc; margin:8px; padding:8px">
  <strong>{{ $q->question }}</strong>
  <br>
  A. {{ $q->option_a }} <br>
  B. {{ $q->option_b }} <br>
  C. {{ $q->option_c }} <br>
  D. {{ $q->option_d }} <br>
  <small>Jawaban: {{ strtoupper($q->correct_answer) }}</small>

  <div style="margin-top:8px;display:flex;gap:8px">
    <a href="{{ route('admin.quizzes.questions.edit', [$quiz, $q]) }}">
      Edit
    </a>

    <form
      method="POST"
      action="{{ route('admin.quizzes.questions.destroy', [$quiz, $q]) }}"
      onsubmit="return confirm('Hapus soal ini?')"
    >
      @csrf
      @method('DELETE')
      <button>Hapus</button>
    </form>
  </div>
</div>
@endforeach

</body>
</html>
