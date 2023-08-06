 <section class="profile deposit px-3">
    <div class="d-flex justify-content-between align-items-center py-4">
      <a href="#" onclick="window.history.back()">
        <i class="bi bi-arrow-left text-white"></i>
      </a>
      <p class="mb-0 text-white">Deposit</p>
      <span> </span>
    </div>

    <div class="justify-content-center text-center py-4">
      <h5>Balance <span class="red-text">₦<?=$udata['bal']?></span></h5>
      <h4 class="red-text"><?=$msg?></h4>
    </div>

    <div class="profile-card px-2 py-3 rounded-4">
      <form method="post" action="<?=base_url('voucher')?>" class="my-3">
        <div class="input-box mb-5">
          <img src="assets/img/amount.png" width="20" alt />
          <input type="text" placeholder="Enter Your Voucher Pin" name="pin" />
        </div>
        <input type="submit" class="gradient-btn-full" value="Redeem Voucher">
      </form>
    </div>
    <a href="#!" class="text-center d-block my-3 hover-blue">Or Pay via Transfer</a>
    </section>
  <!-- js files -->
  <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>
