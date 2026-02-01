<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes - LEARN TAG</title>

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
  position: relative;
  overflow-x: hidden;
  padding: 20px;
  align-items: center;
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

.decoration.lightbulb {
  top: 20%;
  right: 10%;
  width: 60px;
  height: 60px;
  animation-delay: 1s;
}

.decoration.brain {
  top: 60%;
  left: 8%;
  width: 70px;
  height: 70px;
  animation-delay: 2s;
}

.decoration.book {
  bottom: 20%;
  right: 8%;
  width: 65px;
  height: 65px;
  animation-delay: 3s;
}

/* =========================
   QUIZ HEADER
========================= */
.quiz-header {
  text-align: center;
  margin-bottom: 32px;
  position: relative;
  z-index: 1;
  animation: fadeIn 0.6s ease;
}

.quiz-brand {
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

.quiz-subtitle {
  font-size: 13px;
  color: #6b7280;
  font-weight: 500;
  letter-spacing: 2px;
  text-transform: uppercase;
}

/* =========================
   QUIZ CONTAINER
========================= */
.quiz-container {
  width: 650px;
  background: #ffffff;
  padding: 36px 32px;
  border-radius: 20px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
  position: relative;
  z-index: 1;
  animation: fadeUp 0.8s ease;
  display: flex;              /* ⬅️ FLEX */
  flex-direction: column;
}

.quiz-container::before {
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

/* Question */
h3 {
  font-size: 18px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 24px;
  line-height: 1.5;
}

/* Options */
.option {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 13px 16px;
  margin-bottom: 12px;
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: #f9fafb;
  position: relative;
  overflow: hidden;
}

.option::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: #1f7a4d;
  transform: scaleY(0);
  transition: transform 0.3s ease;
}

.option:hover {
  background: #f0fdf4;
  border-color: #1f7a4d;
  transform: translateX(4px);
}

.option:hover::before {
  transform: scaleY(1);
}

/* Custom Radio Button */
input[type="radio"] {
  appearance: none;
  width: 22px;
  height: 22px;
  border: 2px solid #d1d5db;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
  transition: all 0.3s ease;
  flex-shrink: 0;
  accent-color: #2563eb;
}

input[type="radio"]:checked {
  border-color: #2563eb;
  background: #2563eb;
  box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
}

input[type="radio"]:checked::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 8px;
  height: 8px;
  background: white;
  border-radius: 50%;
}

/* Option States */
.option.correct {
  background: linear-gradient(135deg, #dcfce7 0%, #f0fdf4 100%);
  border-color: #22c55e;
  animation: correctPulse 0.6s ease;
}

.option.correct::before {
  background: #22c55e;
  transform: scaleY(1);
}

.option.wrong {
  background: linear-gradient(135deg, #fee2e2 0%, #fef2f2 100%);
  border-color: #ef4444;
  animation: shake 0.5s ease;
}

.option.wrong::before {
  background: #ef4444;
  transform: scaleY(1);
}

/* Locked radio (keep blue) */
input[type="radio"].locked {
  pointer-events: none;
  opacity: 1;
}

/* Buttons */
button {
  margin-top: 20px;
  padding: 14px 24px;
  border: none;
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 100%);
  color: #fff;
  border-radius: 12px;
  cursor: pointer;
  font-size: 15px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(31, 122, 77, 0.3);
  position: relative;
  overflow: hidden;
  width: 100%;
}

button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.5s ease;
}

button:hover::before {
  left: 100%;
}

button:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(31, 122, 77, 0.4);
}

button:active {
  transform: translateY(0);
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

@keyframes shake {
  0%, 100% { transform: translateX(0); }
  10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
  20%, 40%, 60%, 80% { transform: translateX(5px); }
}

@keyframes correctPulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.02);
  }
  100% {
    transform: scale(1);
  }
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {
  .quiz-container {
    padding: 28px 24px;
  }

  .quiz-brand {
    font-size: 28px;
  }

  h3 {
    font-size: 18px;
  }

  .option {
    padding: 14px 16px;
  }

  .decoration {
    transform: scale(0.7);
  }

  .decoration.book {
    display: none;
  }
}

@media (max-width: 480px) {
  .quiz-brand {
    font-size: 24px;
  }
}
    </style>
</head>
<body>

<!-- Floating Learning Decorations -->
<div class="floating-decorations">
    <!-- Lightbulb -->
    <div class="decoration lightbulb">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="32" cy="28" r="12" fill="#1f7a4d"/>
            <path d="M26 38C26 38 28 42 32 42C36 42 38 38 38 38" stroke="#16613c" stroke-width="3" stroke-linecap="round"/>
            <rect x="28" y="44" width="8" height="4" rx="2" fill="#16613c"/>
            <path d="M32 10V16M44 16L40 20M48 28H42M20 16L24 20M16 28H22" stroke="#1f7a4d" stroke-width="2" stroke-linecap="round"/>
            <circle cx="32" cy="26" r="3" fill="#ffffff" opacity="0.6"/>
        </svg>
    </div>

    <!-- Brain -->
    <div class="decoration brain">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 24C20 19.5817 23.5817 16 28 16C29.9464 16 31.7194 16.6866 33.0866 17.8306C34.5368 16.6866 36.4 16 38.5 16C43.1944 16 47 19.8056 47 24.5C47 26.0832 46.5832 27.5664 45.8528 28.8306C47.0832 30.3806 48 32.5 48 35C48 39.9706 44.1944 44 39.5 44C38.5832 44 37.7194 43.8334 36.9168 43.5306C36.25 45.4166 34.5 47 32 47C29.5 47 27.75 45.4166 27.0832 43.5306C26.2806 43.8334 25.4168 44 24.5 44C19.8056 44 16 39.9706 16 35C16 32.5 16.9168 30.3806 18.1472 28.8306C17.4168 27.5664 17 26.0832 17 24.5C17 21.4624 18.5832 18.8056 20.8528 17.3306" fill="#1f7a4d"/>
            <path d="M28 25C28 25 30 27 32 27C34 27 36 25 36 25M32 16V20M32 44V47" stroke="#16613c" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="26" cy="32" r="1.5" fill="#ffffff"/>
            <circle cx="38" cy="32" r="1.5" fill="#ffffff"/>
        </svg>
    </div>

    <!-- Book -->
    <div class="decoration book">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 16C12 13.7909 13.7909 12 16 12H48C50.2091 12 52 13.7909 52 16V48C52 50.2091 50.2091 52 48 52H16C13.7909 52 12 50.2091 12 48V16Z" fill="#1f7a4d"/>
            <path d="M16 12V52M32 12V52" stroke="#16613c" stroke-width="2"/>
            <rect x="20" y="20" width="8" height="2" rx="1" fill="#ffffff" opacity="0.8"/>
            <rect x="20" y="26" width="12" height="2" rx="1" fill="#ffffff" opacity="0.6"/>
        </svg>
    </div>
</div>

<!-- Quiz Header -->
<div class="quiz-header">
    <div class="quiz-brand">LEARN TAG</div>
    <div class="quiz-subtitle">Quiz Challenge</div>
</div>

<div class="quiz-container">

    <h3>{{ $question->question }}</h3>

    {{-- FORM JAWAB --}}
    <form method="POST" action="/quizzes/check">
        @csrf

        @foreach (['a','b','c','d'] as $opt)
            @php
                $class = '';
                if (session('answered')) {
                    if ($opt === session('correct_answer')) {
                        $class = 'correct';
                    } elseif ($opt === session('last_answer')) {
                        $class = 'wrong';
                    }
                }
            @endphp

            <label class="option {{ $class }}">
                <input
                    type="radio"
                    name="answer"
                    value="{{ $opt }}"
                    {{ session('answered') && session('last_answer') === $opt ? 'checked' : '' }}
                    class="{{ session('answered') ? 'locked' : '' }}"
                    required
                >
                {{ $question['option_'.$opt] }}
            </label>
        @endforeach

        <input type="hidden" name="question_id" value="{{ $question->id }}">

        @if(!session('answered'))
            <button type="submit">Jawab</button>
        @endif
    </form>

    {{-- FORM LANJUT --}}
    @if(session('answered'))
        <form method="POST" action="/quizzes/next" style="margin-top:12px;">
            @csrf
            <button>Lanjut</button>
        </form>
    @endif

</div>
</body>
</html>
