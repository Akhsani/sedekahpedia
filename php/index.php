<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Sedekahpedia - #SedekahMudah</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


  <div id="index-banner" class="parallax-container" style="height:650px;">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="center" style="margin:40px 0 40px 0">
          <a href="#"> <img src="img/logo.png" style="height:50px"></a>
          <h6 class="header center" style="font-weight:200">#<strong>Sedekah</strong>Mudah</h6>
        </div>
        
        <div class="row center" style="margin:100px 0 100px 0">
          <h5 class="header col s8 offset-s2 thin" style="line-height:40px">Di bulan berkah ini, MTXL memfasilitasi penyaluran
Zakat/Infaq dengan program-program spesial Ramadhan.</h5>
        </div>
        <div class="row center">
          <a href="form.html" id="download-button" class="btn-large waves-effect waves-light blue accent-3">Sedekah Sekarang</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/bg.png" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">
      <div class="center" style="margin:70px 0 70px 0">
        <h5 class="grey-text text-darken-4" style="letter-spacing:5px;">PROGRAM</h5>
        <span  class="grey-text">Pilih donasimu untuk kegiatan-kegiatan berikut ini</span>
      </div>

      <!--   Icon Section   -->
      <div class="row">

      <!--  Card   -->
      <?php
        $strSQL = "SELECT * FROM activity";
        $rs = mysql_query($strSQL);
        while($row = mysql_fetch_array($rs)) {
          $stat = ceil(($row['progress']/$row['amount'])*100);
          $today = date('m/d/Y');
          $today = strtotime($today);
          $finish = $row['time'];
          $finish = strtotime($finish);
          //difference
          $diff = $finish - $today;
          $daysleft=floor($diff/(60*60*24));
          echo '
          <div class="col s12 m4">
           <div class="card" style="height:550px;">

              <a href="form.php?id='.$row['id'].'">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" style="height:203px;" src="'.$row['photo'].'">
                <div class="blue accent-4" style="right:10px;top:10px;padding:0 10px 0 10px;position:absolute;">
                  <span class="white-text" style="font-size:12px"> MT'.$row['id'].' </span>
                </div>
              </div>
              </a>

              <div class="card-content" style="height:164px;margin-bottom:50px;">
                <span class="card-title activator grey-text text-darken-4" style="font-size:14px;font-weight:400;">'.$row['title'].'<i class="material-icons right">more_vert</i></span>
                <br><a href="form.html" class="grey-text light" style="font-size:12px;line-height:20px;">'.$row['description'].'</a>
              </div>

              <div class="card-reveal">
                <span class="card-title activator grey-text text-darken-4" style="font-size:14px;font-weight:400;">'.$row['title'].'<i class="material-icons right">close</i></span>
                <p class="grey-text light" style="font-size:12px;line-height:20px;">'.$row['description'].'</p>
              </div>

              <a href="form.php?id='.$row['id'].'">
              <div class="card-action">
                <span class="grey-text text-darken-4" style="font-size:14px;font-weight:200">Rp <strong>'.number_format($row['progress']).'</strong></span>
                <div class="progress grey lighten-1">
                    <div class="determinate blue accent-4" style="width: '.$stat.'%"></div>
                </div>
                <div>
                  <span class="grey-text light" style="font-size:12px"> '.$stat.'% </span>
                  <span class="right grey-text light" style="font-size:12px">'.$daysleft.' hari lagi</span>
                </div>
              </div>
              </a>

            </div>
        </div>
          ';}    
      ?>
      <!--   Card End   -->
      </div>

      <div class="center" style="margin:70px 0 70px 0">
        <span  class="grey-text">Atau bisa langsung melalui</span>
        <h5 class="grey-text text-darken-4" style="letter-spacing:5px;">ASISTEN SEDEKAH</h5>
      </div>

      <div class="row">
        <div class="row center">
          <a class="btn-large waves-effect waves-light blue accent-3" style="height:100px;line-height:24px;text-transform:lowercase">
            <br><span class="thin">"Saya mau sedekah dong,<br></span><span style="text-transform:uppercase">R</span><span>p 500.000 untuk <span style="text-transform:uppercase">MT</span>2"</span>
            <br><br>
          </a>
          <p><span class="light"><span style="text-transform:uppercase">sms</span> ke</span>
          <br>
          <span class="bold">0818 0702 1318</span><br></p>
        </div>
      </div>


    </div>
  </div>



  <footer class="page-footer blue accent-4">
    <div class="container center white-text">

    <p class="thin">Layanan <strong>Sedekahin</strong> dan <strong>Asisten Sedekah</strong> merupakan inisiatif dari MTXL divisi Tebar Pesona.
    <br>Untuk informasi lebih lanjut silahkan menghubungi :</p>
    <p class="thin"> <i class="material-icons tiny">call</i>  /  <i class="material-icons tiny">comment</i><br>0818 0702 1318 (Ubed)</p>

    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <strong>MTXL</strong>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
