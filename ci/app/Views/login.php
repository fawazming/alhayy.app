<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
  <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?=base_url('assets/css/swiper.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/bi.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
  <title>Al Hayy</title>
</head>

<body>
  <div id="preloader">
    <div class="img-container">
      <img class="img-fluid" height="150" width="150" src="assets/img/logo.png" alt="">
    </div>
  </div>

  <!-- welcome slider Section -->
  <section class="login-email">
  	<h5 class="deskInfo">Readjust your window to mobile size to improve your experience</h5>
    <div class="top-bg">

    </div>
    <div class="login-card">
      <div class="login-logo">
        <img class="img-fluid logo" src="assets/img/logo.png" alt="">
      </div>
	 <form method="post" action="<?=base_url('auth')?>">
        <div class="input-box">
          <img src="assets/img/email.png" height="15" width="20" alt="">
          <input type="email" placeholder="Email" name="email">
        </div>
        <div class="input-box">
          <img src="assets/img/lock.png" height="18" width="14" alt="">
          <input type="password" placeholder="Password" name="password">
        </div>
        <a href="forgot.html" class="text-white text-decoration-underline text-end d-block pe-4 pb-4 mb-2">Forgot
          Password?</a>
         <input type="submit" value="Login" class="gradient-btn-full">
      </form>
      <p class="text-white text-center mt-3">Or by social account</p>
      <div class="social-login">
        <a href="#">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#">
          <i class="bi bi-google"></i>
        </a>
        <a href="#">
          <i class="bi bi-twitter"></i>
        </a>
      </div>
      <p class="text-center">Don't have an account? <a href="<?=base_url('register')?>" class="text-blue">Sign up</a></p>
    </div>
  </section>
  <!-- JS file linkes -->
  <script src="assets/js/main.js"></script>
</body>

</html>