<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/quizzes/check">
  @csrf

  <h3>{{ $quiz->question }}</h3>

  @foreach(['a','b','c','d'] as $opt)
    <label>
      <input type="radio" name="answer" value="{{ $opt }}" required>
      {{ $quiz['option_'.$opt] }}
    </label>
  @endforeach

  <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

  <button>Jawab</button>
</form>
</body>
</html>
