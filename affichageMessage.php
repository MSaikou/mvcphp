<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chat</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	
	<body>
		<div class="container-fluid">
			
		
		<div class="row">
						<div class="col-md-4 col-md-offset-4">
		<?php 
			while($donnee = $querySelect->fetch())
			{ ?>	
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?= $donnee['pseudo'] ?></h3>
					</div>

					<div class="panel-body">
						<?= $donnee['message'] ?>
					</div>
					<div class="panel-footer">
						<a href="post.php?id=<?= $donnee['Id'] ?>">Commentaires</a>
					</div>				
				</div>	
		<?php 
			}
			$querySelect->closeCursor();
		?>
		</div>
	</body>
</html>