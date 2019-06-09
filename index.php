<?php 
// require file functions
require_once 'functions.php';
// nilai contioh
$nilaiRibu = 1999;
$nilaiPuluhRibu = 19999;
$nilaiRatusRibu = 199999;

if (isset($_POST['convert_nilai'])) {
  if ($_POST['angka'] == "" || $_POST['angka'] == 0) {
      echo '
            <script>alert("Maaf form tidak boleh ada yang kosong !"); window.location="./"; </script>
      ';
      return false;
   }
   $get_result = str_replace(',.-/', ' ', $_POST['angka']);
   header('Location: ./?result='.$get_result);
}

?>

<!-- 
  //=============================//
  //> Author   : Ahmad sopyan
  //> Email    : ahmadsofian63@gmil.com
  //> Telpon   : 089635550381 - 083872700529
  //> Github   : https://github.com/ahmadsopyan9
  //> Facebook : https://www.facebook.com/ahmadsopyan99
  //> Website  : https://isfidev.site - https://blog.isfidev.site - https://store.isfidev.site
//=============================//
 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Convert Angka Ke Huruf</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>

	<div class="header">
		<i class="fa fa-gears"></i> Mengconverter Nilai Angka Rupiah Ke Huruf
	</div>
	
	<div class="container">

        <div class="title_example">
          <i class="fa fa-angle-double-right"></i> Contoh Hasil Output Convert
        </div>

        <div class="box">
          <h4 align="center">
            <i class="fa fa-angle-right"></i>  Hasil Nilai Angka Rupiah Ribuan
          </h4>
            <div class="box-body">
	          <div class="content">
	          	<?php 
	          	  echo "Angka : Rp.".number_format($nilaiRibu)."<br>";
	               echo "Huruf : " . ucwords(Convert($nilaiRibu))." Rupiah";
	            ?>
	          </div>
	        </div>
        </div>
        <!-- ./end box -->

        <div class="box">
          <h4 align="center">
            <i class="fa fa-angle-right"></i>  Hasil Nilai Angka Rupiah Puluh Ribuan
          </h4>
            <div class="box-body">
	          <div class="content">
	          	<?php 
	          	  echo "Angka : Rp.".number_format($nilaiPuluhRibu)."<br>";
	               echo "Huruf : " . ucwords(Convert($nilaiPuluhRibu))." Rupiah";
	            ?>
	          </div>
	        </div>
        </div>
        <!-- ./end box -->

        <div class="box">
          <h4 align="center">
            <i class="fa fa-angle-right"></i> Hasil Nilai Angka Rupiah Ratus Ribuan
          </h4>
            <div class="box-body">
	          <div class="content">
	          	<?php 
	          	  echo "Angka : Rp.".number_format($nilaiRatusRibu)."<br>";
	               echo "Huruf : " . ucwords(Convert($nilaiRatusRibu))." Rupiah";
	            ?>
	          </div>
	        </div>
        </div>
        <!-- ./end box -->

        <div class="clear"></div>

        <div class="centered" id="box-btn">
            <a href="?uji_coba" class="btn large"><i class="fa fa-arrow-right"></i> UJI COBA <i class="fa fa-arrow-left"></i></a>
        </div>

        <div class="box-ujicoba centered" id="box-ujicoba">
           <div class="box-form">
             <h3 class="title_ujicoba" align="center"></h3>
             <form action="" method="post" autocomplete="off">
              <p>
               <label>Angka</label>
               <input type="number" name="angka" placeholder="Masukan angka rupiah Eg* 10000" required="required">
              </p>

              <p>
               <button type="submit" name="convert_nilai" class="btn"> <i class="fa fa-check"></i> CONVERT SEKARANG</button>
               <a href="./" class="btn bg-red"> <i class="fa fa-close"></i> BATAL</a>
              </p>
            </form>
           </div>
        </div>


        <div class="box-ujicoba centered" id="box-output">
            <div class="result">
              <p style="color: #fafafa;">
               <?php 
                 echo "<b style='color:#ff8; font-size:18px;'>Angka : Rp.".number_format($_GET['result'])."</b><br>";
                 echo "<b style='color:#333;'>Terbilang : </b>" . ucwords(Convert($_GET['result']))." Rupiah";
              ?>
              </p>
            </div>

              <p>
               <a href="./?uji_coba#" name="convert_nilai" class="btn"> <i class="fa fa-history"></i> CONVERT LAGI</a>
                <a href="./" name="convert_nilai" class="btn bg-red"> <i class="fa fa-angle-left"></i> KEMBALI</a>
              </p>
           </div>
        </div>
        

        <div class="my_info">
          <span style="color:#ff5;">Contact My :</span>
           <a href="https://www.facebook.com/ahmadsopyan99" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
           <a href="https://api.whatsapp.com/send?phone=6289635550381&text=Halo%20Bang%20Sopyan%20,Saya%20Mau%20Tanya%20Nih" class="wa" target="_blank"><i class="fa fa-whatsapp"></i></a>
           <a href="mailto:ahmadsofian63@gmil.com" class="mail" target="_blank"><i class="fa fa-envelope"></i></a>
           <a href="https://github.com/ahmadsopyan9" class="git" target="_blank"><i class="fa fa-github"></i></a>
           
        </div>
	</div>
	<!-- ./end container -->
  
  <!-- pagescrips -->
  <script src="js/jquery.min.js"></script>

  <?php if (isset($_GET['uji_coba'])) { ?>
     <script>
        $(document).ready(function(){
            $('.box').hide();
            $('#box-btn').hide();
            $('.title_example').hide();
            document.querySelector('.title_ujicoba').innerHTML='<i class="fa fa-thumbs-up"></i> Uji Coba Convert Nilai Rupiah';
            $('#box-ujicoba').fadeIn(300);
        });
     </script>
  <?php } else if (isset($_GET['result'])){ ?>
     <script>
        $(document).ready(function(){
            $('.box').hide();
            $('#box-btn').hide();
            $('.title_example').hide();
            document.querySelector('.title_ujicoba').innerHTML='=> Hasil Convert';
            $('#box-ujicoba').hide();
            $('#box-output').fadeIn(350);
        });
     </script>
  <?php } else { ?>
     <script>
        $(document).ready(function(){
            $('.box').show();
            $('#box-btn').show();
            $('.title_example').show();
        });
     </script>
  <?php } ?>

</body>
</html>
