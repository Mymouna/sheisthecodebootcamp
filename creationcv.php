<?php 
session_start();
include('connexion.php');
if (isset($_POST['btnValider']) ){

								$sql="SELECT * FROM cv WHERE facebook='".mysqli_real_escape_string($link,$_POST['Facebook'])."',
							twitter='".mysqli_real_escape_string($link,$_POST['twitter'])."' 
							AND github='".mysqli_real_escape_string($link,($_POST['github']))."' LIMIT 0,1";
								//die($sql);
								$res=mysqli_query($link,$sql);
						if ($res) {
							echo "insertion reussie";
						}else{
							$msg=mysqli_error($link);
						}
						}





include('menu.php'); 

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creer cv</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: pink">
	<div class="container">
	<div class="row" style="padding-top: 80px; margin-left: -10px;">

<div class="col-md-2" style="padding-top: 40px;">
	<table width="100%">
		<tr>
			<td width="22%">
				<a style="color:blue;" href="modifier.php">Modifier Profil</a><br><br>
				<a style="color:blue;" href="cv.php">Creer cv</a><br><br>
				<a style="color:blue;" href="">Afficher votre CV</a><br><br>
				<a style="color:blue;" href="">Ajouter Experience</a><br><br>
				<a style="color:blue;" href="">Ajouter Diplome</a><br><br>
				<a style="color:blue;" href="">Ajouter Centre d'interet</a><br>
			</td>
		</tr>
	</table>
      </div>

		<div class="col-md-offset-2 col-md-6">
			<form action="" method="POST" role="form">
				        <div class="form-group">
							<label for="">Facebook</label>
							<input name="facebook" type="text" class="form-control" id="" placeholder="Nom" required="">
						</div>
						<div class="form-group">
							<label for="">Twitter</label>
							<input name="twitter" type="text" class="form-control" id="" placeholder="Nom" required="">
						</div>
						<div class="form-group">
							<label for="">Github</label>
							<input name="github" type="text" class="form-control" id="" placeholder="Nom" required="">
				        </div>
				        <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
			</form>





		</div>
	</div>
	</div>
	</div>
</body>
</html>
						
