<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>

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
            max-width: 700px;
            margin: auto;
        }

        h3 {
            font-size: 22px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 16px;
        }

        .card {
            background: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .form-group {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
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

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        button {
            padding: 12px 18px;
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

        .btn-back {
            background: #e5e7eb;
            color: #111827;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            padding: 12px 18px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-back:hover {
            background: #d1d5db;
        }
    </style>
</head>
<body>

<div class="container">

    <h3>Edit Soal</h3>

    <div class="card">
        <form method="POST" action="{{ route('admin.quizzes.questions.update', [$quiz, $question]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Pertanyaan</label>
                <input
                    name="question"
                    value="{{ $question->question }}"
                    placeholder="Masukkan pertanyaan"
                >
            </div>

            <div class="options-grid">
                @foreach(['a','b','c','d'] as $opt)
                    <div class="form-group">
                        <label>Opsi {{ strtoupper($opt) }}</label>
                        <input
                            name="option_{{ $opt }}"
                            value="{{ $question['option_'.$opt] }}"
                        >
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label>Jawaban Benar</label>
                <select name="correct_answer">
                    @foreach(['a','b','c','d'] as $opt)
                        <option
                            value="{{ $opt }}"
                            {{ $question->correct_answer == $opt ? 'selected' : '' }}
                        >
                            {{ strtoupper($opt) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="actions">
                <button type="submit">Update Soal</button>
                <a
                    href="{{ route('admin.quizzes.questions', $quiz) }}"
                    class="btn-back"
                >
                    ← Kembali
                </a>
            </div>

        </form>
    </div>

</div>

</body>
</html>
