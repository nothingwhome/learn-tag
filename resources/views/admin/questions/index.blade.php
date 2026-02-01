<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Quiz</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', system-ui, sans-serif;
        }

        body {
            background: #f5f7fa;
            padding: 32px 16px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h2 {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .meta {
            color: #6b7280;
            margin-bottom: 16px;
        }

        .warning {
            color: #dc2626;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .card {
            background: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            margin-bottom: 24px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        input, select {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #1f7a4d;
            box-shadow: 0 0 0 3px rgba(31,122,77,.15);
        }

        .full {
            grid-column: span 2;
        }

        button {
            padding: 12px 16px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #1f7a4d, #16613c);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        button:hover {
            opacity: .9;
        }

        .question-card {
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 16px;
            margin-bottom: 16px;
            background: #fff;
        }

        .question-card strong {
            font-size: 16px;
            color: #111827;
        }

        .options {
            margin-top: 8px;
            color: #374151;
        }

        .answer {
            margin-top: 6px;
            font-size: 13px;
            color: #1f7a4d;
            font-weight: 600;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 12px;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 13px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-edit {
            background: #2563eb;
            color: #fff;
        }

        .btn-delete {
            background: #dc2626;
            color: #fff;
            border: none;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            opacity: .9;
        }

        hr {
            border: none;
            height: 1px;
            background: #e5e7eb;
            margin: 24px 0;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Soal – {{ $quiz->title }}</h2>
    <p class="meta">Jumlah soal: {{ $questions->count() }}</p>

    @if($questions->count() < 5)
        <p class="warning">Minimal 5 soal</p>
    @endif

    <div class="card">
        <form method="POST">
            @csrf

            <div class="form-grid">
                <input class="full" name="question" placeholder="Pertanyaan">

                <input name="option_a" placeholder="Opsi A">
                <input name="option_b" placeholder="Opsi B">

                <input name="option_c" placeholder="Opsi C">
                <input name="option_d" placeholder="Opsi D">

                <select name="correct_answer" class="full">
                    <option value="">Pilih jawaban benar</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                </select>

                <button class="full">Tambah Soal</button>
            </div>
        </form>
    </div>

    @foreach($questions as $q)
        <div class="question-card">
            <strong>{{ $q->question }}</strong>

            <div class="options">
                A. {{ $q->option_a }} <br>
                B. {{ $q->option_b }} <br>
                C. {{ $q->option_c }} <br>
                D. {{ $q->option_d }}
            </div>

            <div class="answer">
                Jawaban: {{ strtoupper($q->correct_answer) }}
            </div>

            <div class="actions">
                <a
                    href="{{ route('admin.quizzes.questions.edit', [$quiz, $q]) }}"
                    class="btn btn-edit"
                >
                    Edit
                </a>

                <form
                    method="POST"
                    action="{{ route('admin.quizzes.questions.destroy', [$quiz, $q]) }}"
                    onsubmit="return confirm('Hapus soal ini?')"
                >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-delete">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>
