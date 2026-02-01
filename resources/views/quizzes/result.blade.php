<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Quiz - LEARN TAG</title>

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
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow-x: hidden;
  padding: 20px;
}

/* Animated Background */
body::before {
  content: '';
  position: absolute;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(31, 122, 77, 0.15) 0%, transparent 70%);
  border-radius: 50%;
  top: -200px;
  right: -100px;
  animation: float 8s ease-in-out infinite;
  z-index: 0;
}

body::after {
  content: '';
  position: absolute;
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(31, 122, 77, 0.1) 0%, transparent 70%);
  border-radius: 50%;
  bottom: -100px;
  left: -100px;
  animation: float 10s ease-in-out infinite reverse;
  z-index: 0;
}

/* =========================
   FLOATING DECORATIONS
========================= */
.floating-decorations {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 0;
}

.decoration {
  position: absolute;
  opacity: 0.08;
  animation: floatRotate 15s ease-in-out infinite;
}

.decoration svg {
  width: 100%;
  height: 100%;
  filter: drop-shadow(0 4px 8px rgba(31, 122, 77, 0.1));
}

.decoration.trophy {
  top: 15%;
  right: 10%;
  width: 70px;
  height: 70px;
  animation-delay: 1s;
}

.decoration.star {
  top: 65%;
  left: 8%;
  width: 60px;
  height: 60px;
  animation-delay: 2s;
}

.decoration.graduation {
  bottom: 20%;
  right: 8%;
  width: 75px;
  height: 75px;
  animation-delay: 3s;
}

/* =========================
   RESULT CONTAINER
========================= */
.result-wrapper {
  max-width: 420px;
  width: 100%;
  position: relative;
  z-index: 1;
}

/* Header */
.result-header {
  text-align: center;
  margin-bottom: 32px;
  animation: fadeIn 0.6s ease;
}

.result-brand {
  font-size: 32px;
  font-weight: 800;
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 50%, #1f7a4d 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradientShift 3s ease infinite;
  letter-spacing: 1px;
  margin-bottom: 8px;
}

.result-subtitle {
  font-size: 13px;
  color: #6b7280;
  font-weight: 500;
  letter-spacing: 2px;
  text-transform: uppercase;
}

/* Result Card */
.result-container {
  background: #ffffff;
  padding: 36px 32px;
  border-radius: 20px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
  animation: fadeUp 0.8s ease;
  position: relative;
  text-align: center;
}

.result-container::before {
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

/* Icon */
.result-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 24px;
  background: linear-gradient(135deg, #1f7a4d, #16613c);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  animation: scaleIn 0.6s ease;
  box-shadow: 0 8px 20px rgba(31, 122, 77, 0.3);
}

/* Title */
h2 {
  font-size: 24px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 24px;
}

/* Score Display */
.score-display {
  background: linear-gradient(135deg, #f0fdf4, #dcfce7);
  border: 2px solid #22c55e;
  border-radius: 16px;
  padding: 24px;
  margin-bottom: 24px;
  animation: fadeIn 1s ease;
}

.score-value {
  font-size: 48px;
  font-weight: 800;
  background: linear-gradient(135deg, #1f7a4d, #16613c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 8px;
  line-height: 1;
}

.score-label {
  font-size: 14px;
  color: #16a34a;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Stats */
.stats-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
  margin-bottom: 28px;
}

.stat-item {
  background: #f9fafb;
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  padding: 16px;
  transition: all 0.3s ease;
}

.stat-item:hover {
  border-color: #1f7a4d;
  transform: translateY(-2px);
}

.stat-value {
  font-size: 28px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 4px;
}

.stat-item.correct .stat-value {
  color: #16a34a;
}

.stat-item.wrong .stat-value {
  color: #dc2626;
}

.stat-label {
  font-size: 13px;
  color: #6b7280;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Buttons */
.button-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-top: 28px;
}

.btn {
  padding: 14px 24px;
  border: none;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  position: relative;
  overflow: hidden;
}

.btn-primary {
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 100%);
  color: white;
  box-shadow: 0 4px 15px rgba(31, 122, 77, 0.3);
}

.btn-primary::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.5s ease;
}

.btn-primary:hover::before {
  left: 100%;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(31, 122, 77, 0.4);
}

.btn-secondary {
  background: white;
  color: #1f7a4d;
  border: 2px solid #1f7a4d;
}

.btn-secondary:hover {
  background: #f0fdf4;
  transform: translateY(-2px);
}

/* =========================
   ANIMATIONS
========================= */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes scaleIn {
  from {
    opacity: 0;
    transform: scale(0.5);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes float {
  0%, 100% {
    transform: translateY(0) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(5deg);
  }
}

@keyframes floatRotate {
  0%, 100% {
    transform: translateY(0) rotate(0deg);
  }
  25% {
    transform: translateY(-20px) rotate(5deg);
  }
  50% {
    transform: translateY(-10px) rotate(-3deg);
  }
  75% {
    transform: translateY(-25px) rotate(8deg);
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
@media (max-width: 480px) {
  .result-brand {
    font-size: 28px;
  }

  .result-container {
    padding: 28px 24px;
  }

  .score-value {
    font-size: 40px;
  }

  .stat-value {
    font-size: 24px;
  }

  .decoration {
    transform: scale(0.7);
  }
}
    </style>
</head>
<body>

<!-- Floating Decorations -->
<div class="floating-decorations">
    <!-- Trophy -->
    <div class="decoration trophy">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32 8L28 16H20L16 24C16 24 18 32 24 32H28V40H24V48H40V40H36V32H40C46 32 48 24 48 24L44 16H36L32 8Z" fill="#1f7a4d"/>
            <rect x="28" y="40" width="8" height="8" fill="#16613c"/>
            <path d="M24 48H40" stroke="#16613c" stroke-width="2" stroke-linecap="round"/>
            <circle cx="28" cy="20" r="2" fill="#ffffff" opacity="0.6"/>
        </svg>
    </div>

    <!-- Star -->
    <div class="decoration star">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32 8L36 24L52 28L36 32L32 48L28 32L12 28L28 24L32 8Z" fill="#1f7a4d"/>
            <path d="M32 16L34 26L44 28L34 30L32 40L30 30L20 28L30 26L32 16Z" fill="#16613c"/>
        </svg>
    </div>

    <!-- Graduation Cap -->
    <div class="decoration graduation">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32 18L8 28L32 38L56 28L32 18Z" fill="#1f7a4d"/>
            <path d="M12 30V40C12 40 18 46 32 46C46 46 52 40 52 40V30" stroke="#16613c" stroke-width="2.5"/>
            <rect x="54" y="28" width="4" height="18" rx="2" fill="#16613c"/>
            <circle cx="56" cy="48" r="3" fill="#1f7a4d"/>
        </svg>
    </div>
</div>

<div class="result-wrapper">
    <!-- Header -->
    <div class="result-header">
        <div class="result-brand">LEARN TAG</div>
        <div class="result-subtitle">Hasil Quiz</div>
    </div>

    <!-- Result Card -->
    <div class="result-container">
        <!-- Icon -->
        <div class="result-icon">
            🎉
        </div>

        <h2>Quiz Selesai!</h2>

        <!-- Score Display -->
        <div class="score-display">
            <div class="score-value">{{ round(($score / $total) * 100) }}%</div>
            <div class="score-label">Nilai Akhir</div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-item correct">
                <div class="stat-value">{{ $score }}</div>
                <div class="stat-label">Benar</div>
            </div>
            <div class="stat-item wrong">
                <div class="stat-value">{{ $total - $score }}</div>
                <div class="stat-label">Salah</div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="button-group">
            <a href="/quizzes/start/{{ session('quiz_id') }}" class="btn btn-primary">
                Ulangi Quiz
            </a>
            <a href="{{ route('home') }}" class="btn btn-secondary">
                ← Kembali ke Home
            </a>
        </div>
    </div>
</div>

</body>
</html>
