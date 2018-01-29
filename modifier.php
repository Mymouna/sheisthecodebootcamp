<?php include('connexion.php');
      include('menu.php'); 
?>

<?php include('connexion.php');
	$msg="";
	if (isset($_POST['btnValider'])){
			 		 
        if (isset($_GET['id'])){
			$sql="UPDATE codeuses SET 
			 		  nom='".$_POST['nom']."',
			 		  prenoms='".$_POST['prenoms']."',
			 		  datenaissance='".$_POST['datenaissance']."',
			 		  photo='".$_POST['photo']."',
			 		  specialisation='".$_POST['specialisation']."',
			 		  email='".$_POST['email']."',
			 		  mdp='".$_POST['mdp']."',
			 		  resume='".$_POST['resume']."' WHERE id=".$_GET['id'];
			 }


			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}
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
	<div class="row" style="padding-top: 5%;">
		    <div class="col-md-offset-3 col-md-6">
			<form action="" method="POST" role="form">
				        <div class="form-group">
							<label for="">Nom</label>
							<input name="nom" type="text" class="form-control" id="" placeholder="Nom" required="">
						</div>
						<div class="form-group">
							<label for="">Prenoms</label>
							<input name="prenoms" type="text" class="form-control" id="" placeholder="Prenom(s)" required="">
						</div>
						<div class="form-group">
							<label for="">Date de naissance</label>
							<input name="datenaissance" type="date" class="form-control" id="" placeholder="Entrer la date de naissance" required="">
						</div>
						<div class="form-group">
							<label for="textarea">Resumé</label>
							<textarea name="resume" type="textarea" class="form-control" id="" placeholder="Entrer le Resumé" required=""></textarea>
						</div>
					    <div class="form-group">
							<label for="">Spécialisation</label>
							<input name="specialisation" type="telephone" class="form-control" id="" placeholder="Entrer la specialisation" required="">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input name="email" type="email" class="form-control" id="" placeholder="Exemple@gmail.com" required="">
						</div>
						<div class="form-group">
							<label for="">Téléphone</label>
							<input name="telephone" type="telephone" class="form-control" id="" placeholder="telephone" required="">
						</div>
						<div class="form-group">
							<label for="">Mot de pass</label>
							<input name="mdp" type="password" class="form-control" id="" placeholder="password" required="">
						</div>
						<div class="form-group">
							<label for="">photo</label>
							<input name="photo" type="file" class="form-control" id="" placeholder="insérer une image">
				        </div>
				<button type="submit" class="btn btn-primary btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
            </form>
            </div>
    </div>
    </div>
</body>
</html>