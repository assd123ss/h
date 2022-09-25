<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="style.css?v=9999" />
</head>
<body>
<form action="login.php" method="post" name="frmlogin" >
    <div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
      <h1 class="form__title">เข้าสู่ระบบ</h1>

      <form name="frmlogin"  method="post" action="login.php">
        <p> </p>
        <p> ชื่อผู้ใช้ 
          <input    class="form__email"  type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน 
          <input   class="form__email"   type="password"   id="Password"required name="Password" placeholder="Password">
        </p>
        <p>
        <input class="form__submit-btn"  type ="submit" value="เข้าสู่ระบบ">
          <br>
          <a href="register.php"> สมัครสมาชิก</a>
        </p>
      </form>
</body>
</html>