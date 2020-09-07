<?php
  require_once('header.php');
?>

<style>
  
</style>
  <ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
    <div class="login" style="top: -90px;">
    <h2 style="font-size: 23px;">Masuk</h2>
    <form action="login_act.php" method="POST">
    	<input type="text" name="username" placeholder="Username" style="height: 40px;" />
  		<input type="password" name="password" placeholder="Password" style="height: 40px;" />
  <input type="submit" value="Masuk" style="font-size: 20px;" />
  <div class="utilities">
    <a style="font-size: 16px;">Belum punya akun?</a>
    <a href="register.php" style="font-size: 16px;">Daftar disini! &rarr;</a>
  </div>
</form>
</div>

</ul>
