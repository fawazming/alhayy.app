<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
  <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" type="image/x-icon">
  <!-- <link rel="stylesheet" href="<?=base_url('assets/css/swiper.css')?>"> -->
  <link rel="stylesheet" href="<?=base_url('assets/css/bi.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
  <title>Al Hayy</title>
</head>

<body>
  <div id="preloader">
    <div class="img-container">
      <img class="img-fluid" height="150" width="150" src="<?=base_url('assets/img/logo.png')?>" alt="">
    </div>
  </div>
  <!-- welcome slider Section -->
  <section class="matchboard mx-3 position-relative">
    <h5 class="deskInfo">Readjust your window to mobile size to improve your experience</h5>
    
    <div class="bottom-navigation">
      <!-- <a href="matchboard.html" class="single-nav">
        <i class="bi bi-trophy"></i>
        <span>Matches</span>
      </a> -->
      <a href="<?=base_url('loan')?>" class="single-nav">
        <i class="bi bi-dribbble"></i>
        <span>Loan</span>
      </a>
      <a href="<?=base_url()?>" class="single-nav">
        <i class="bi bi-play-circle"></i>
        <span>Home</span>
      </a>
      <a href="<?=base_url('news')?>" class="single-nav">
        <i class="bi bi-globe-americas"></i>
        <span>News</span>
      </a>
      <!-- <a href="statistics.html" class="single-nav">
        <i class="bi bi-globe"></i>
        <span>Statistic</span>
      </a> -->
    </div>
    <div class="d-flex justify-content-end align-items-center mt-3 mb-2 gap-2">
      <a href="<?=base_url('deposit')?>">
        <img src="<?=base_url('assets/img/plus.png')?>" width="25" alt="">
      </a>
      <h6 class="mb-0">₦<?=$bal?></h6>
      <div class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <img src="<?=base_url('assets/img/profile.png')?>" width="35" alt="">
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">       
        <div>
          <section class="profile px-3">
            <div class="d-flex justify-content-between align-items-center py-4">
              <a href="#" data-bs-dismiss="offcanvas">
                <i class="bi bi-arrow-left text-white"></i>
              </a>
              <p class="mb-0 text-white">Profile</p>
              <a href="edit-profile.html">
                <i class="bi bi-pencil-square text-white"></i>
              </a>
            </div>
            <div class="d-flex justify-content-between align-items-center pb-3">
              <div class="d-flex gap-2">
                <img src="<?=base_url('assets/img/profile.png')?>" width="55" height="55" alt="">
                <div>
                  <h4 class="text-white mb-0"><?=$fname.' '.$sname?></h4>
                  <span class="text-white"><?=$email?></span>        
                </div>
              </div>
              <a href="#" class="outline-btn py-1 px-4">Profile</a>
            </div>
            <div class="profile-card">
              <div class="card-top d-flex justify-content-between">
                <div>
                  <p class="mb-1">My Balance</p>
                  <h3>₦<?=$bal?>.00</h3>
                </div>
                <div class="d-flex gap-2 align-items-center">
                  <a class="gradient-btn py-2 px-3 fs-6 fw-normal" href="<?=base_url('deposit')?>">Deposit</a>
                  <a class="outline-btn-small fs-6" href="<?=base_url('withdraw')?>">Withdraw</a>
                </div>
              </div>
            </div>
            <div class="profile-row mt-3">
              <a href="notifications.html" class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/notification.png')?>" alt="">
                <p class="fw-500 mb-0">Notification</p>
              </a>
              <!-- <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
              </label> -->
            </div>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/exchange.png')?>" alt="">
                <p class="fw-500 mb-0">My Exchange History</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="messages.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/message.png')?>" alt="">
                <p class="fw-500 mb-0">Message</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="invite.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/invite-icon.png')?>" alt="">
                <p class="fw-500 mb-0">Invite Friends</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="wallet.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/wallet.png')?>" alt="">
                <p class="fw-500 mb-0">Wallet</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/feedback.png')?>" alt="">
                <p class="fw-500 mb-0">Feedback</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="terms.html" class="profile-row my-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/terms.png')?>" alt="">
                <p class="fw-500 mb-0">Terms & Policy</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="<?=base_url('logout')?>" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="<?=base_url('assets/img/prediction.png')?>" alt="">
                <p class="fw-500 mb-0">Log Out</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
          </section>
        </div>
      </div>
    </div>
