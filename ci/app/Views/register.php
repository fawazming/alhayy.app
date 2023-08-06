<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
  <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?=base_url('assets/css/swiper.css')?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
  <title>Al Hayy || Register</title>
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
	 	<form method="post" action="<?=base_url('register')?>">
	 	<div class="input-box">
          <img src="assets/img/user.png" height="18" width="18" alt="">
          <input type="text" name="fname" placeholder="First Name" required>
        </div>
        <div class="input-box">
          <img src="assets/img/user.png" height="18" width="18" alt="">
		  <input type="text" name="sname" placeholder="Surname" required>
        </div>
        <div class="input-box">
          <img src="assets/img/email.png" height="15" width="20" alt="">
			<input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
          <img src="assets/img/email.png" height="15" width="20" alt="">
		   <input type="number" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="input-box">
          <img src="assets/img/email.png" height="15" width="20" alt="">
		   <input type="text" name="ref" placeholder="Referrer">
        </div>
        <div class="input-box">
          <img src="assets/img/lock.png" height="18" width="14" alt="">
          <input type="password" placeholder="Password" name="password" required>
          <small class="mb-0">Make sure the password is what you intended</small>
        </div>
        <a href="forgot.html" class="text-white text-decoration-underline text-end d-block pe-4 pb-4 mb-2">Forgot
          Password?</a>
         <input type="submit" value="Register" class="gradient-btn-full">
      </form>
      <p class="text-center">Already have an account? <a href="<?=base_url()?>" class="text-blue">Sign in</a></p>
    </div>
  </section>
  <!-- JS file linkes -->
  <script src="assets/js/main.js"></script>
</body>

</html>