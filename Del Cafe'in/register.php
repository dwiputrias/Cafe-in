<?php
   require_once('header.php');
?>


	<ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
    <div class="register" style="">
      <h2>Daftar</h2>
        <form action="member_register.php" method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" />
          <input type="text" name="alamat" placeholder="Alamat" />
        	<input type="email" name="email" placeholder="Email" />
          <input type="text" name="nohp" placeholder="Nomor Handphone" />
          <input type="text" name="username" placeholder="Username" />
      		<input type="password" name="password" placeholder="Password"/>
          <input type="password" name="konfirmpass" placeholder="Ulang Password"/>
          <input type="submit" value="Daftar" name="daftar" />
            <div class="utilities">
              <a>Sudah punya akun?</a>
              <a href="login.php">Login disini! &rarr;</a>
            </div>
        </form>
    </div>
	

<style>
.register {
  width: 400px;
  background-color: brown;
  border-radius: 5px;
  padding: 30px;
  position: absolute;
  left: 48%;
  top: 110px;
  margin-left: -170px;
  box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 0px 2px rgba(0, 0, 0, 0.5);
}
.register h2 {
  color: white; 
  font-family: sans-serif;
  font-size: 23px;
  margin: 0 0 15px;
  text-shadow: 0px -1px rgba(0, 0, 0, 0.5);
}
.register input{
  height: 40px;
  width: 335px;
}
.register input[type="submit"] {
  margin-top: 10px;
  display: block;
  width: 335px;
  font-size: 14px;
  font-weight: bold;
  border: 0;
  text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
  background-color: #f6ba35;
  background-image: -webkit-linear-gradient(90deg, #eca418, #ffcd4e);
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.register .utilities {
  margin-top: 20px;
}
.register .utilities a {
  color: #ffffff;
  text-decoration: none;
  font-size: 15px;
  text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.4);
}
.register .utilities a:hover {
  color: white;
}
.register .utilities a:nth-child(2) {
  display: block;
  float: right;
  width: 50%;
  text-align: right;
}
.register:before, .register:after {
  z-index: -1;
  position: absolute;
  content: "";
  left: 5px;
  width: 53%;
  top: 15px;
  height: 80%;
  bottom: 80%;
  max-width: 300px;
  background: rgba(0, 0, 0, 0.7);
  box-shadow: -10px -15px 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: rotate(-3deg);
}
.register:after {
  box-shadow: 10px -15px 20px rgba(0, 0, 0, 0.2) !important;
  -webkit-transform: rotate(3deg);
  right: 5px;
  left: auto;
}

</style>