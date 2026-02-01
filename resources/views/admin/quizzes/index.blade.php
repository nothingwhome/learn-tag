<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Quiz - Admin LEARN TAG</title>

    <style>
        /* =========================
   RESET & BASE
========================= */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

body {
  min-height: 100vh;
  background: linear-gradient(135deg, #e9fff4, #f6fffb);
  padding: 40px 20px;
}

/* =========================
   CONTAINER
========================= */
.admin-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */
.admin-header {
  background: #ffffff;
  padding: 24px 32px;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  margin-bottom: 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  animation: fadeIn 0.6s ease;
}

.admin-header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #1f7a4d, #16613c, #1f7a4d);
  background-size: 200% auto;
  border-radius: 20px 20px 0 0;
  animation: gradientShift 3s linear infinite;
}

.header-left h2 {
  font-size: 24px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 4px;
}

.header-left p {
  font-size: 14px;
  color: #6b7280;
}

.btn-add {
  padding: 12px 24px;
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 100%);
  color: white;
  border: none;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(31, 122, 77, 0.3);
  position: relative;
  overflow: hidden;
}

.btn-add::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.5s ease;
}

.btn-add:hover::before {
  left: 100%;
}

.btn-add:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(31, 122, 77, 0.4);
}

/* =========================
   QUIZ GRID
========================= */
.quiz-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
  animation: fadeUp 0.8s ease;
}

/* =========================
   QUIZ CARD
========================= */
.quiz-card {
  background: #ffffff;
  border: 2px solid #e5e7eb;
  padding: 24px;
  border-radius: 16px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.quiz-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, #1f7a4d, #16613c);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.quiz-card:hover::before {
  opacity: 1;
}

.quiz-card:hover {
  border-color: #1f7a4d;
  transform: translateY(-4px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.quiz-card h3 {
  font-size: 18px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 8px;
  line-height: 1.4;
}

.quiz-card p {
  font-size: 14px;
  color: #6b7280;
  line-height: 1.6;
  margin-bottom: 16px;
  min-height: 42px;
}

.quiz-meta {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: #f0fdf4;
  color: #16a34a;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 13px;
  font-weight: 600;
  margin-bottom: 16px;
}

/* =========================
   ACTIONS
========================= */
.quiz-actions {
  display: flex;
  gap: 8px;
  padding-top: 16px;
  border-top: 1px solid #e5e7eb;
}

.btn {
  padding: 8px 16px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  border: none;
}

.btn-edit {
  background: #f0fdf4;
  color: #16a34a;
  border: 1px solid #bbf7d0;
}

.btn-edit:hover {
  background: #dcfce7;
  border-color: #16a34a;
}

.btn-manage {
  background: #eff6ff;
  color: #2563eb;
  border: 1px solid #bfdbfe;
}

.btn-manage:hover {
  background: #dbeafe;
  border-color: #2563eb;
}

.btn-delete {
  background: #fef2f2;
  color: #dc2626;
  border: 1px solid #fecaca;
  margin-left: auto;
}

.btn-delete:hover {
  background: #fee2e2;
  border-color: #dc2626;
}

/* =========================
   EMPTY STATE
========================= */
.empty-state {
  text-align: center;
  padding: 80px 20px;
  background: #ffffff;
  border-radius: 16px;
  border: 2px dashed #d1d5db;
}

.empty-icon {
  font-size: 64px;
  margin-bottom: 16px;
  opacity: 0.5;
}

.empty-state h3 {
  font-size: 18px;
  color: #6b7280;
  margin-bottom: 8px;
}

.empty-state p {
  font-size: 14px;
  color: #9ca3af;
}

/* =========================
   ANIMATIONS
========================= */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes gradientShift {
  0% {
    background-position: 0% center;
  }
  50% {
    background-position: 100% center;
  }
  100% {
    background-position: 0% center;
  }
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {
  .admin-header {
    flex-direction: column;
    gap: 16px;
    align-items: flex-start;
  }

  .btn-add {
    width: 100%;
    justify-content: center;
  }

  .quiz-grid {
    grid-template-columns: 1fr;
  }

  .quiz-actions {
    flex-wrap: wrap;
  }

  .btn-delete {
    margin-left: 0;
    width: 100%;
  }
}

@media (max-width: 480px) {
  body {
    padding: 20px 12px;
  }

  .admin-header {
    padding: 20px;
  }

  .quiz-card {
    padding: 20px;
  }
}
    </style>
</head>
<body>

<div class="admin-container">
    <!-- Header -->
    <div class="admin-header">
        <div class="header-left">
            <h2> Kelola Quiz</h2>
            <p>Manage quiz dan soal-soal pembelajaran</p>
        </div>
        <a href="{{ route('admin.quizzes.create') }}" class="btn-add">
            <span>+</span>
            Tambah Quiz Baru
        </a>
    </div>

    <!-- Quiz Grid -->
    @if($quizzes->count() > 0)
    <div class="quiz-grid">
        @foreach($quizzes as $quiz)
        <div class="quiz-card">
            <h3>{{ $quiz->title }}</h3>
            <p>{{ $quiz->description }}</p>

            <div class="quiz-meta">
                <span></span>
                <span>{{ $quiz->questions_count }} Soal</span>
            </div>

            <div class="quiz-actions">
                <a href="{{ route('admin.quizzes.edit', $quiz) }}" class="btn btn-edit">
                    Edit
                </a>

                <a href="{{ route('admin.quizzes.questions', $quiz) }}" class="btn btn-manage">
                    Kelola Soal
                </a>

                <form
                    method="POST"
                    action="{{ route('admin.quizzes.destroy', $quiz) }}"
                    onsubmit="return confirm('Yakin ingin menghapus quiz ini?')"
                    style="display: inline;"
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="empty-state">
        <h3>Belum ada quiz</h3>
        <p>Klik tombol "Tambah Quiz Baru" untuk membuat quiz pertama</p>
    </div>
    @endif
</div>

</body>
</html>
