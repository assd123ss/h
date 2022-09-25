<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM mydb WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($con, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'M')";
            $result = mysqli_query($con, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: form_login.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: form_login.php");
            }
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css?v=9999" />

</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form">
  <div class="form__box1">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png"/></div>
    </div>
    
    <div class="form__right">
      <div class="form__padding-right">
      <h1 class="form__title">สมัครสมาชิก</h1>


        <div class="fonta">
        <label for="username">ผู้ใช้</label>
        <input class = "form_email"  type="text" name="username" placeholder="กรุณากรอก ผู้ใช้" required>
      
        <label for="password">รหัสผ่าน</label>
        <input class = "form_email"  type="password" name="password" placeholder="กรุณากรอก รหัสผ่าน" required>
      
        <label for="firstname">ชื่อ</label>
        <input  class = "form_email" type="text" name="firstname" placeholder="กรุณากรอกชื่อ" required>
       
        <label for="lastname">นามสกุล</label>
        <input class = "form_email"   type="text" name="lastname" placeholder="กรุณากรอกนามสกุล" required>
      
        <input  class="form__submit-btn"    type="submit" name="submit" value="สมัครสมาชิก">
        <a href="form_login.php"> ย้อนกลับไปหน้าล็อคอิน</a>
    


    
    </form>
    </div>
    </div>
    </div>
  </div>
</div>



    




</body>
</html>