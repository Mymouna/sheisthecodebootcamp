<?php include('connexion.php');
      include('menu.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inscription</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: orange">
		<div class="container">
	<div class="row" style="margin-top: 10%;">
		    <div class="col-md-4">
		    	<h3 style="color: pink;">Salahou Maimouna</h3>
		    	<br style="color: pink;">26/07/1998
		    	<br style="color: pink;">Cocody Angré
		    	<br style="color: pink;">48221483
		    	<br style="color: pink;">salahou.maimouna@gmail.com
		    </div>
		    <div class="col-md-5">
		    	<h3 style="color: pink;">Resume des codeuses</h3>
		    </div>
		    <div class="col-md-2">
		    	<img class="avatar-large" src="upload/<?php echo $data['photo']; ?>" width="150px" height="100px" alt="">
		    	<br style="color: pink;">Codeuse
		    	<br><div class="footer-links">
    <a href="#"><i class="fa fa-github"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a> </div>
		    </div>
