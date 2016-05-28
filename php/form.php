<?php
  include 'config.php';
  if(isset($_GET["id"])){
    $id = $_GET["id"];  
  }
  else {
         $url = "Location: index.php";
       }
  
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

	<div class="row">

        <div class="col s12 m4 offset-m4">
           <div class="card">
           
            <?php  
              $strSQL = "SELECT * FROM activity WHERE id='".$id."'";
              $rs = mysql_query($strSQL);
              $row = mysql_fetch_array($rs);
              echo '
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="'.$row['photo'].'">
                <div class="blue accent-4" style="right:10px;top:10px;padding:0 10px 0 10px;position:absolute;">
                  <span class="white-text" style="font-size:12px"> MT'.$row['id'].' </span>
                </div>
              </div>
              
              <div class="card-content">
                <p class="grey-text light" style="font-size:12px;line-height:20px;">Sedekah untuk : </p>
                <span class="card-title grey-text text-darken-4" style="font-size:14px;font-weight:400;">'.$row['title'].'</span>
              </div>
              ';

              ?>

              <div class="card-action">

                	<h6 class="grey-text text-darken-4 center">Silahkan mengisi data berikut : </h6>
                  <?php
                  echo '<form name="form" id ="form" action="checkout.php?id='.$id.'" method="POST" enctype="multipart/form-data">';
                  ?>

  	                <div style="margin:40px 0 40px 0;">
  		                <div class="input-field">
  		                	<input name="name" type="text" class="validate">
  							        <label for="name">Nama Lengkap</label>                	
  		                </div>
  		                <div class="input-field">
  		                	<input name="email" type="email" class="validate">
  							         <label for="email">Email</label>                	
  		                </div>
  		                <div class="input-field">
  		                	<input name="value" type="text" class="validate">
  							      <label for="value">Jumlah Sedekah (ex. 100000)</label>                	
  		                </div>
  	                </div>

  	                <div class="center" style="margin-bottom:40px;">
                      <button class="btn waves-effect waves-light blue accent-4" name ="submit" type="submit" value="submit" >Selanjutnya 
                      </button>

  	                </div>
                  </form>

              </div>


            </div>
        </div>

      </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>

</html>