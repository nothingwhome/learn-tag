<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hasil Quiz</h2>

<p>Benar: {{ $score }}</p>
<p>Salah: {{ $total - $score }}</p>

<h3>
  Nilai: {{ round(($score / $total) * 100) }}%
</h3>

<a href="/quizzes/start">Ulangi Quiz</a>
</body>
</html>
