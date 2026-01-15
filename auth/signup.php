<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sahara | Signup</title>
  <link rel="icon" href="../assets/favicon.ico" />
  <link rel="stylesheet" href="../css/auth.css" />
  <script type="module" src="../js/signup.js"></script>
</head>

<body>
  <main class="auth-page">
    <div class="logo"><span>Sahara</span></div>
    <div class="auth-container">
      <div class="auth-card">
        <div class="auth-header">
          <h1>Welcome to Sahara</h1>
          <p>Create an account to start shopping today</p>
        </div>

        <form action="" method="post" class="auth-form" id="signup-form">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
            <span class="error-message" id="name-error"></span>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <span class="error-message" id="email-error"></span>
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" placeholder="+880 1234-567890" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
            <span class="error-message" id="phone-error"></span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="password-container">
              <input type="password" name="password" id="password" placeholder="Create a password">
              <button type="button" class="toggle-password" data-target="password">
                <span class="material-symbols-outlined">visibility</span>
              </button>
            </div>
            <span type="button" class="error-message" id="password-error"></span>
            <div class="password-strength" id="password-strength">
              <div class="strength-bar">
                <div class="strength-fill"></div>
              </div>
              <span class="strength-text">Password strength</span>
            </div>
          </div>

          <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <div class="password-container">
              <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter your password">
              <button type="button" class="toggle-password" data-target="confirm_password">
                <span class="material-symbols-outlined">visibility</span>
              </button>
            </div>
            <span class="error-message" id="confirm-password-error"></span>
          </div>

          <div class="form-group">
            <label for="terms" class="checkbox-label">
              <input type="checkbox" name="terms" id="terms">
              <span>I agree to the <a href="#" class="link">Terms of Service</a> and <a href="#" class="link">Privacy Policy</a></span>
            </label>
            <span class="error-message" id="terms-error"></span>
          </div>

          <div class="form-group">
            <label for="newsletter" class="checkbox-label">
              <input type="checkbox" name="newsletter" id="newsletter">
              <span>Send me exclusive deals and updates</span>
            </label>
          </div>

          <button type="submit" class="btn-primary">Create Account</button>

          <div class="auth-divider"><span>OR</span></div>

          <button type="button" class="btn-social">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.717v2.258h2.908c1.702-1.567 2.684-3.874 2.684-6.615z" fill="#4285F4" />
              <path d="M9.003 18c2.43 0 4.467-.806 5.956-2.18L12.05 13.56c-.806.54-1.836.86-3.047.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332C2.438 15.983 5.482 18 9.003 18z" fill="#34A853" />
              <path d="M3.964 10.712c-.18-.54-.282-1.117-.282-1.71 0-.593.102-1.17.282-1.71V4.96H.957C.347 6.175 0 7.55 0 9.002c0 1.452.348 2.827.957 4.042l3.007-2.332z" fill="#FBBC05" />
              <path d="M9.003 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.464.891 11.426 0 9.003 0 5.482 0 2.438 2.017.957 4.958L3.964 7.29c.708-2.127 2.692-3.71 5.036-3.71z" fill="#EA4335" />
            </svg>
            Continue with Google
          </button>

          <div class="auth-footer">
            <p>Already have an account? <a href="login.php" class="link">Sign in</a></p>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>

</html>
