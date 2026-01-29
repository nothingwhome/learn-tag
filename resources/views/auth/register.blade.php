<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - LEARN TAG</title>
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
  opacity: 0.12;
  animation: floatRotate 15s ease-in-out infinite;
}

.decoration svg {
  width: 100%;
  height: 100%;
  filter: drop-shadow(0 4px 8px rgba(31, 122, 77, 0.1));
}

.decoration.book1 {
  top: 15%;
  left: 8%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}

.decoration.book2 {
  top: 60%;
  left: 5%;
  width: 70px;
  height: 70px;
  animation-delay: 2s;
}

.decoration.brain {
  top: 25%;
  right: 10%;
  width: 90px;
  height: 90px;
  animation-delay: 1s;
}

.decoration.pencil {
  top: 70%;
  right: 8%;
  width: 75px;
  height: 75px;
  animation-delay: 3s;
}

.decoration.lightbulb {
  bottom: 15%;
  right: 12%;
  width: 70px;
  height: 70px;
  animation-delay: 4s;
}

.decoration.graduation {
  top: 45%;
  left: 7%;
  width: 85px;
  height: 85px;
  animation-delay: 2.5s;
}

.decoration.atom {
  bottom: 25%;
  left: 10%;
  width: 65px;
  height: 65px;
  animation-delay: 1.5s;
}

.decoration.rocket {
  top: 35%;
  right: 6%;
  width: 75px;
  height: 75px;
  animation-delay: 3.5s;
}

/* =========================
   REGISTER WRAPPER
========================= */
.register-wrapper {
  width: 100%;
  max-width: 420px;
  padding: 24px;
  position: relative;
  z-index: 1;
  margin: auto;
}

/* =========================
   LEARN TAG ANIMATION
========================= */
.learn-tag {
  text-align: center;
  margin-bottom: 32px;
  animation: fadeIn 1s ease;
}

.learn-tag-text {
  font-size: 42px;
  font-weight: 800;
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 50%, #1f7a4d 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradientShift 3s ease infinite;
  letter-spacing: 2px;
  position: relative;
  display: inline-block;
}

.learn-tag-text::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 50%;
  transform: translateX(-50%);
  width: 60%;
  height: 4px;
  background: linear-gradient(90deg, transparent, #1f7a4d, transparent);
  border-radius: 2px;
  animation: expandLine 2s ease-in-out infinite;
}

.learn-tag-subtitle {
  font-size: 13px;
  color: #6b7280;
  margin-top: 16px;
  font-weight: 500;
  letter-spacing: 3px;
  text-transform: uppercase;
  animation: fadeIn 1.5s ease;
}

/* =========================
   REGISTER CARD
========================= */
.register-card {
  background: #ffffff;
  padding: 36px 32px;
  border-radius: 20px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
  animation: fadeUp 0.8s ease;
  position: relative;
}

.register-card::before {
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

/* =========================
   HEADER
========================= */
.register-title {
  font-size: 26px;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 6px;
}

.register-subtitle {
  font-size: 14px;
  color: #6b7280;
  margin-bottom: 28px;
}

/* =========================
   FORM
========================= */
.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: #374151;
  margin-bottom: 8px;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 13px 16px;
  border-radius: 12px;
  border: 2px solid #e5e7eb;
  font-size: 14px;
  transition: all 0.3s ease;
  background: #f9fafb;
}

.form-group input:focus,
.form-group select:focus {
  outline: none;
  border-color: #1f7a4d;
  background: #ffffff;
  box-shadow: 0 0 0 4px rgba(31, 122, 77, 0.1);
  transform: translateY(-1px);
}

/* Password Toggle */
.password-wrapper {
  position: relative;
}

.password-wrapper input {
  padding-right: 45px;
}

.toggle-password {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
  padding: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #6b7280;
  transition: color 0.3s ease;
}

.toggle-password:hover {
  color: #1f7a4d;
}

.toggle-password svg {
  width: 20px;
  height: 20px;
}

/* =========================
   BUTTON
========================= */
.btn-register {
  width: 100%;
  padding: 14px;
  background: linear-gradient(135deg, #1f7a4d 0%, #16613c 100%);
  color: #ffffff;
  border: none;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(31, 122, 77, 0.3);
  position: relative;
  overflow: hidden;
}

.btn-register::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.5s ease;
}

.btn-register:hover::before {
  left: 100%;
}

.btn-register:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(31, 122, 77, 0.4);
}

.btn-register:active {
  transform: translateY(0);
}

/* =========================
   EXTRA LINKS
========================= */
.register-extra {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
  color: #6b7280;
}

.register-extra a {
  color: #1f7a4d;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.register-extra a:hover {
  text-decoration: underline;
  color: #16613c;
}

/* =========================
   ERROR MESSAGE
========================= */
.error-message {
  background: #fee2e2;
  color: #991b1b;
  padding: 12px 14px;
  border-radius: 10px;
  font-size: 13px;
  margin-bottom: 18px;
  border-left: 4px solid #dc2626;
  animation: shake 0.5s ease;
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

@keyframes expandLine {
  0%, 100% {
    width: 60%;
    opacity: 1;
  }
  50% {
    width: 80%;
    opacity: 0.7;
  }
}

@keyframes shake {
  0%, 100% { transform: translateX(0); }
  10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
  20%, 40%, 60%, 80% { transform: translateX(5px); }
}
    </style>
</head>
<body>
    <!-- Floating Learning Decorations -->
    <div class="floating-decorations">
        <!-- Book 1 -->
        <div class="decoration book1">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 16C12 13.7909 13.7909 12 16 12H48C50.2091 12 52 13.7909 52 16V48C52 50.2091 50.2091 52 48 52H16C13.7909 52 12 50.2091 12 48V16Z" fill="#1f7a4d"/>
                <path d="M16 12V52M32 12V52" stroke="#16613c" stroke-width="2"/>
                <rect x="20" y="20" width="8" height="2" rx="1" fill="#ffffff" opacity="0.8"/>
                <rect x="20" y="26" width="12" height="2" rx="1" fill="#ffffff" opacity="0.6"/>
                <rect x="20" y="32" width="10" height="2" rx="1" fill="#ffffff" opacity="0.6"/>
                <rect x="36" y="20" width="8" height="2" rx="1" fill="#ffffff" opacity="0.8"/>
                <rect x="36" y="26" width="12" height="2" rx="1" fill="#ffffff" opacity="0.6"/>
            </svg>
        </div>

        <!-- Book 2 -->
        <div class="decoration book2">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 18L32 12L50 18V50L32 56L14 50V18Z" fill="#1f7a4d"/>
                <path d="M32 12V56M14 18L32 24L50 18" stroke="#16613c" stroke-width="2"/>
                <circle cx="32" cy="35" r="6" fill="#ffffff" opacity="0.3"/>
            </svg>
        </div>

        <!-- Brain -->
        <div class="decoration brain">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 24C20 19.5817 23.5817 16 28 16C29.9464 16 31.7194 16.6866 33.0866 17.8306C34.5368 16.6866 36.4 16 38.5 16C43.1944 16 47 19.8056 47 24.5C47 26.0832 46.5832 27.5664 45.8528 28.8306C47.0832 30.3806 48 32.5 48 35C48 39.9706 44.1944 44 39.5 44C38.5832 44 37.7194 43.8334 36.9168 43.5306C36.25 45.4166 34.5 47 32 47C29.5 47 27.75 45.4166 27.0832 43.5306C26.2806 43.8334 25.4168 44 24.5 44C19.8056 44 16 39.9706 16 35C16 32.5 16.9168 30.3806 18.1472 28.8306C17.4168 27.5664 17 26.0832 17 24.5C17 21.4624 18.5832 18.8056 20.8528 17.3306" fill="#1f7a4d"/>
                <path d="M28 25C28 25 30 27 32 27C34 27 36 25 36 25M32 16V20M32 44V47" stroke="#16613c" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="26" cy="32" r="1.5" fill="#ffffff"/>
                <circle cx="38" cy="32" r="1.5" fill="#ffffff"/>
                <path d="M24 28Q28 30 32 28Q36 30 40 28" stroke="#ffffff" stroke-width="1" opacity="0.4"/>
            </svg>
        </div>

        <!-- Pencil -->
        <div class="decoration pencil">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 52L12 58L18 52Z" fill="#1f7a4d"/>
                <rect x="20" y="10" width="24" height="38" rx="2" fill="#1f7a4d" transform="rotate(45 32 32)"/>
                <rect x="22" y="12" width="20" height="8" fill="#16613c" transform="rotate(45 32 32)"/>
                <path d="M45 19L19 45L15 41L41 15L45 19Z" fill="#ffffff" opacity="0.2"/>
                <circle cx="32" cy="32" r="2" fill="#ffffff" opacity="0.3"/>
            </svg>
        </div>

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

        <!-- Graduation Cap -->
        <div class="decoration graduation">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 18L8 28L32 38L56 28L32 18Z" fill="#1f7a4d"/>
                <path d="M12 30V40C12 40 18 46 32 46C46 46 52 40 52 40V30" stroke="#16613c" stroke-width="2.5"/>
                <rect x="54" y="28" width="4" height="18" rx="2" fill="#16613c"/>
                <circle cx="56" cy="48" r="3" fill="#1f7a4d"/>
                <path d="M32 38V46" stroke="#ffffff" stroke-width="2" opacity="0.3"/>
            </svg>
        </div>

        <!-- Atom -->
        <div class="decoration atom">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="32" cy="32" rx="24" ry="8" stroke="#1f7a4d" stroke-width="2" fill="none" transform="rotate(60 32 32)"/>
                <ellipse cx="32" cy="32" rx="24" ry="8" stroke="#1f7a4d" stroke-width="2" fill="none" transform="rotate(-60 32 32)"/>
                <ellipse cx="32" cy="32" rx="24" ry="8" stroke="#1f7a4d" stroke-width="2" fill="none"/>
                <circle cx="32" cy="32" r="4" fill="#16613c"/>
                <circle cx="32" cy="12" r="2.5" fill="#1f7a4d"/>
                <circle cx="32" cy="52" r="2.5" fill="#1f7a4d"/>
                <circle cx="52" cy="32" r="2.5" fill="#1f7a4d"/>
            </svg>
        </div>

        <!-- Rocket -->
        <div class="decoration rocket">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 8C32 8 42 12 42 26V42L32 52L22 42V26C22 12 32 8 32 8Z" fill="#1f7a4d"/>
                <ellipse cx="32" cy="28" rx="6" ry="8" fill="#ffffff" opacity="0.3"/>
                <circle cx="32" cy="26" r="3" fill="#16613c"/>
                <path d="M22 42L18 50L22 46L22 42Z" fill="#16613c"/>
                <path d="M42 42L46 50L42 46V42Z" fill="#16613c"/>
                <path d="M28 36C28 36 30 38 32 38C34 38 36 36 36 36" stroke="#ffffff" stroke-width="2" opacity="0.4"/>
            </svg>
        </div>
    </div>

    <div class="register-wrapper">
        <!-- LEARN TAG Animation -->
        <div class="learn-tag">
            <div class="learn-tag-text">LEARN TAG</div>
            <div class="learn-tag-subtitle">Learning Management System</div>
        </div>

        <div class="register-card">
            <h1 class="register-title">Daftar Akun</h1>
            <p class="register-subtitle">Buat akun baru untuk memulai pembelajaran</p>

            <form method="POST" action="/register">
                @csrf

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email@example.com" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password" id="password" placeholder="Minimal 8 karakter" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            <svg id="eye-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg id="eye-off-icon" style="display: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-register">Daftar</button>
            </form>

            <div class="register-extra">
                Sudah punya akun?
                <a href="/login">Login</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeOffIcon = document.getElementById('eye-off-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.style.display = 'none';
                eyeOffIcon.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                eyeIcon.style.display = 'block';
                eyeOffIcon.style.display = 'none';
            }
        }
    </script>
</body>
</html>
