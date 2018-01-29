<?php 
session_start();
include('connexion.php');
if (isset($_POST['btnValider']) ){

								$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND mdp='".mysqli_real_escape_string($link,md5($_POST['mdp']))."' LIMIT 0,1";
								//die($sql);
								$req= mysqli_query($link,$sql);
								if (mysqli_num_rows($req)>0) {
									$data= mysqli_fetch_array($req);
									$_SESSION['variable']=$data['id'];
									header('location:index.php');
								}else{
									echo "identifiants incorrects";
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
	<title>inscription</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: pink">
	<div class="container">
		<div class="row">
			
<?php include ('menu.php');
?>

		</div>
	<div class="row" style="margin-top: 10%; ">
		    <div class="col-md-offset-3 col-md-6">
			<form action="" method="POST" role="form">
				        <div class="form-group">
							<label for="">Email</label>
							<input name="email" type="email" class="form-control" id="" placeholder="Exemple@gmail.com" required="">
						</div>
						<div class="form-group">
							<label for="">Mot de pass</label>
							<input name="mdp" type="password" class="form-control" id="" placeholder="password" required="">
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
			</form>
             




		   </div>
	</div>
    </div>
</body>
</html>