<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Edit Soal</h3>

<form method="POST" action="{{ route('admin.quizzes.questions.update',[$quiz,$question]) }}">
@csrf @method('PUT')

<input name="question" value="{{ $question->question }}">

@foreach(['a','b','c','d'] as $opt)
<input name="option_{{ $opt }}" value="{{ $question['option_'.$opt] }}">
@endforeach

<select name="correct_answer">
@foreach(['a','b','c','d'] as $opt)
<option value="{{ $opt }}" {{ $question->correct_answer==$opt?'selected':'' }}>
{{ strtoupper($opt) }}
</option>
@endforeach
</select>

<button>Update</button>
</form>

</body>
</html>
