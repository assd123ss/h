
<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){

	  Header("Location: form_login.php");

}else{?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap');
</style>


    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
    



<style>
	body {
		font-family: 'Mali', cursive;
        background-image: url("c6.jpg");
	}
    </style>


<nav class="navbar navbar-expand-lg navbar-dark p-3 bg-danger" id="headerNav">
  <div class="container-fluid">
    <a class="navbar-brand d-block d-lg-none" href="#">
      <img src="/static_files/images/logos/logo_2_white.png" height="80" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 active" aria-current="page" href="index1.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="stoke.php">สินค้า</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link mx-2" href="#">
            <img src="bac.png" height="40" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#">รายการมังงะ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ยินดีต้อนรับคุณ ผู้ใช้
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout.php">ล็อคเอ้าส์</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center><h1>ยินดีต้อนรับผู้ใช้งาน</h1></center>
    <div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://s3.theasianparent.com/cdn-cgi/image/width=700,quality=95/tap-assets-prod/wp-content/uploads/sites/25/2021/11/AAAABXhRp7YMyqwvA-I1CQdP_Bu5Sx4-seci5ba29Qz2RqlquWb9NxFMStVGzh8EfCxpfJ5gwMkjM65h4RP6T9yOjqDTpKos.jpg" height="400"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://quiz.postjung.com/data/25/25577.image1.jpg" height="400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://news.dexclub.com/wp-content/uploads/2020/07/Ijiranaide-Nagatoro-San-Anime-Tease-Thumb.jpg"height="400" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php }?>