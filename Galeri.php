<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <title>Coffe</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts     -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center">

         <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a>

         <nav class="nav">
            <a href="http://127.0.0.1:8000/">Beranda</a>
            <a href="tentang.php">Tentang</a>
            <a href="menu.php">Menu</a>
            <a href="Galeri.php">Galeri</a>
            <a href="">Review</a>
            <a href="kontak.php">Kontak</a>
            <a href="">Blog</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="login-btn" class="fas fa-user"></div>
         </div>

      </div>

   </div>

</header>

<!-- login form starts -->

<div class="login-form">

   <form action="">
      <div id="close-login-form" class="fas fa-times"></div>
      <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a>
      <h3>Mari kita mulai hari baru yang hebat</h3>
      <input type="email" name="" placeholder="Masukkan email Anda" id="" class="box">
      <input type="password" name="" placeholder="Masukkan password anda" id="" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="ingat saya">
         <label for="ingat saya">Ingat saya</label>
         <a href="#">Tidak ingat kata sandi?</a>
      </div>
      <input type="submit" value="login now" class="link-btn">
      <p class="account">Tidak punya akun? <a href="#">Buatlah akun</a></p>
   </form>

</div>

<section class="gallery" id="gallery">

   <h1 class="heading"> Galeri </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/g-img-1.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi bukan lagi minuman yang hanya cocok dinikmati untuk membangunkan Anda.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/g-img-2.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>kopi kacang Adalah dengan cara yang sama seperti Anda membuat kopi tradisional "di pers Prancis,pembuat kopi tetes biasa, atau bahkan mesin espresso."</p>
         </div>
      </div>

      <div class="box">
         <img src="images/g-img-3.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi Lemon adalah antioksidan yang kuat dan berhubungan dengan penurunan risiko kanker, diyakini datang dari kandungan masing-masing baik kopi maupun lemon.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/g-img-4.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi Biskuit adalah kopi susu dengan topping biskuit regal. Seperti yang tersedia di kedai Kopi Soe ini.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/g-img-5.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi & croissant bisa jadi tempat sarapan hingga ngemil sore yang pas.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/menu1.png" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Bagi pecinta kopi mungkin sudah tidak asing lagi dengan jenis kopi robusta. Salah satu tempat penghasil kopi jenis ini ada di Aceh Tengah dan sering disebut Gayo.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/menu2.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Sesuai dengan namanya, kopi Arabika Kintamani berasal dari daerah Bali. Kopi ini memiliki cita rasa yang unik, yaitu rasa asam dan segar dari buah-buahan menjadi ciri khasnya.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/menu3.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi Arabika Papua Wamena yang tumbuh di lembah Baliem pegunungan Jayawijaya Wamena dengan ketinggian 1.600 m di atas permukaan laut.</p>
         </div>
      </div>

      <div class="box">
         <img src="images/menu4.jpg" alt="">
         <div class="content">
            <h3>Coffe</h3>
            <p>Kopi Liberika adalah jenis kopi yang berasal dari Liberia, Dan Afrika Barat.</p>
         </div>
      </div>
      
      <div class="bottom" style="text-align: center;margin-bottom: 50px; width: 310%;">
      <div class="col s12">
         <a href="http://127.0.0.1:8000/" class="waves-effect waves-light btn" style="background:#512a10  !important;">Kembalikan Tempat</a>
      </div>
   </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>