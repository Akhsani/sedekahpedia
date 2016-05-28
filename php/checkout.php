<?php
  include 'config.php';
  if(isset($_POST["submit"])){

        $name = "'".$_POST["name"]."'";
        $email = "'".$_POST["email"]."'";
        $value = "'".$_POST["value"]."'";
        $target = "'".$_GET["id"]."'";
        $strSQL = "INSERT INTO donator(name,email,value,target)";
        $strSQL = $strSQL . "VALUES (".$name.",".$email.",".$value.",".$target.");";
        if (mysql_query($strSQL)) {
          $success = 1;
        };
       } else {
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

	<div class="row" style="margin-top:50px;">
        <div class="col s12 m4 offset-m4">
        	<div class="center" style="margin-bottom:40px;">
        		<p class="grey-text" style="font-size:14px;font-weight:400;">Silahkan transfer sejumlah </p>
        		<h4 class="grey-text text-darken-4 light">Rp 
        		<?php
        		 $strSQL1 = "SELECT * FROM donator WHERE (name,email,value,target)=(".$name.",".$email.",".$value.",".$target.")";
				 $rs = mysql_query($strSQL1);
				 $row = mysql_fetch_array($rs); 
				 echo $row['value'];
        		?>
        		</h4>
        		<p class="grey-text" style="font-size:14px;font-weight:400;">Sisa waktu <span class="blue-text text-acccent-4">59:59:50</span></p>
        	</div>

        	<h5 class="center grey-text text-darken-4">Channel Pembayaran</h5>
			<ul class="collapsible" data-collapsible="accordion" style="margin-top:20px;">
			<li>
			  <div class="collapsible-header"><i class="material-icons">filter_drama</i>BCA</div>
			  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
			<li>
			  <div class="collapsible-header"><i class="material-icons">place</i>XL Tunai</div>
			  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
			<li>
			  <div class="collapsible-header"><i class="material-icons">whatshot</i>Mandiri</div>
			  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			</li>
			</ul>

			<div class="center" style="margin:40px 0 40px;;">
				<a href="index.php" class="waves-effect waves-light btn grey ">Batal</a>
	            <a href="index.php" class="waves-effect waves-light btn blue accent-4">Sudah Transfer</a>

	        </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>

</html>