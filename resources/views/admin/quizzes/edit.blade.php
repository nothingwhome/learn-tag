<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quizzes</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', system-ui, sans-serif;
        }

        body {
            background: #f5f7fa;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            background: #fff;
            width: 100%;
            max-width: 480px;
            padding: 28px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .card h3 {
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: 700;
            color: #1f2937;
            text-align: center;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            transition: .2s ease;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #1f7a4d;
            box-shadow: 0 0 0 3px rgba(31,122,77,.15);
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #1f7a4d, #16613c);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: .2s ease;
        }

        button:hover {
            opacity: .9;
            transform: translateY(-1px);
        }

        .btn-back {
            flex: 1;
            text-align: center;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            color: #374151;
            font-weight: 600;
            text-decoration: none;
            transition: .2s ease;
        }

        .btn-back:hover {
            background: #f3f4f6;
        }
    </style>
</head>
<body>

<div class="card">
    <h3>Edit Quizzes</h3>

    <form method="POST" action="{{ route('admin.quizzes.update', $quiz) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Judul Quiz</label>
            <input
                type="text"
                name="title"
                placeholder="Masukkan judul quiz"
                value="{{ old('title', $quiz->title) }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea
                name="description"
                placeholder="Masukkan deskripsi quiz"
            >{{ old('description', $quiz->description) }}</textarea>
        </div>

        <div class="actions">
            <button type="submit">Update</button>
            <a href="{{ route('admin.quizzes.index') }}" class="btn-back">
                Kembali
            </a>
        </div>
    </form>
</div>

</body>
</html>
