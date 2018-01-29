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
<body style="background-color: white;">
	<div class="container">
   		<?php
   		$list="SELECT * FROM codeuses ";
   		$res=mysqli_query($link, $list);
   		while ($data=mysqli_fetch_array($res)){
   			?>
   			<div class="row" style="margin-top: 10%; background-color: lightgray;">

   				<div class="col-sm-3" >
   					<img src="img/mai.jpg" width="150px" height="150px" alt="" style="border-radius: 100px;">
   				</div>
   				<div class="col-sm-4" style="padding-top: 50px;">
                <h3><?php echo ($data['specialisation']) ; ?></h3>
                <section><?php echo substr ($data['resume'], 0, 100) ; ?>...</section>
   				</div>
   				<div class="col-sm-offset-2 col-sm-2" style="padding-top: 70px;">
   					<button name="lire" type="" class="btn btn-warning" style="border-radius: 100px;"> <a href="cv.php?id=<?php echo $data['id']; ?>" >Consulter le CV</a></button>
   				</div>
   			</div>
   			<?php
   		}
   			?>
   		</div>