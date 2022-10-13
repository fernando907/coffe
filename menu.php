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
            <a href="Tentang.php">Tentang</a>
            <a href="menu.php">Menu</a>
            <a href="Galeri.php">Galeri</a>
            <a href=">Review</a>
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

<section class="menu" id="menu">
   <div class="container box-container">

      <div class="box">
         <img src="images/g-img-2.jpg" alt="">
         <h3>Latte</h3>
         <p>Namanya berasal dari 'caffelatte' yang berarti kopi susu. Tergolong minuman kopi klasik yang diracik dari espresso yang ditambahkan susu panas dan foam susu di atasnya. Bisa ditambahkan gula atau sirop karamel sesuai selera</p>
         <div>
         <h2>Rp 30.000</h2>
			<button class="btn">
            <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
      </div>

      <div class="box">
         <img src="images/menu1.png" alt="">
         <h3>Woca Kopi Robusta Gayo</h3>
         <p>Bagi pecinta kopi mungkin sudah tidak asing lagi dengan jenis kopi robusta. Salah satu tempat penghasil kopi jenis ini ada di Aceh Tengah dan sering disebut Gayo. Dari sisi cita rasa yang dihasilkan, merk kopi robusta Gayo ini sangat khas. Bahkan, kopi ini sudah mendapatkan sertifikasi Fair Trade dari International Organization of Fair Trade.</p>
         <div>
         <h2>Rp 32.000</h2>
			<button class="btn">
            <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
      </div>

      <div class="box">
         <img src="images/g-img-1.jpg" alt="">
         <h3>Cappucino</h3>
         <p>Cappuccino merupakan kopi yang populer dari Italia karena lebih sering dan lebih banyak dikonsumsi. Rasanya yang tidak terlalu pahit seperti espresso, membuat cappuccino lebih mudah diterima oleh lidah semua orang khususnya kalangan muda. Komposisinya terdiri atas espresso dan tambahan susu cair serta busa di atasnya</p>
         <div>
         <h2>Rp 45.000</h2>
			<button class="btn">
                <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
      </div>

      <div class="box">
         <img src="images/menu2.jpg" alt="">
         <h3>Mocha Java</h3>
         <p>Sesuai dengan namanya, kopi Arabika Kintamani berasal dari daerah Bali. Kopi ini memiliki cita rasa yang unik, yaitu rasa asam dan segar dari buah-buahan menjadi ciri khasnya.</p>
         <div>
         <h2>Rp 40.000</h2>
			<button class="btn">
            <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
   </div>

   <div class="box">
         <img src="images/menu4.jpg" alt="">
         <h3>Kopi Wamena – Papua</h3>
         <p>Kopi Arabika Papua Wamena yang tumbuh di lembah Baliem pegunungan Jayawijaya Wamena dengan ketinggian 1.600 m di atas permukaan laut, yang tumbuh tanpa menggunakan pupuk kimia, karena tanah Papua yang sangat subur sehingga kopi Arabika ini dihasilkan dengan kualitas yang sangat baik.</p>
         <div>
         <h2>Rp 43.000</h2>
			<button class="btn">
            <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
   </div>

   <div class="box">
         <img src="images/menu3.jpg" alt="">
         <h3>Kopi Ekselsa</h3>
         <p>Kopi Liberika adalah jenis kopi yang berasal dari Liberia, Dan Afrika Barat. Kopi ini dapat tumbuh setinggi 9 meter dari tanah. Pada abad-19, jenis kopi ini didatangkan ke Indonesia untuk menggantikan kopi Arabika yang terserang oleh hama penyakit.</p>
         <div>
         <h2>Rp 45.000</h2>
			<button class="btn">
            <a href="kontak.php" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
        </div>
      </div>
      <div class="bottom" style="text-align: center;margin-bottom: 50px; width: 310%;">
      <div class="col s12">
         <a href="http://127.0.0.1:8000/" class="waves-effect waves-light btn" style="background:#512a10  !important;">Kembalikan Tempat</a>
      </div>
   
</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>