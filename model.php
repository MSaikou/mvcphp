<?php
	
	/*
	* Model 
	*/	
	//Fonction de recuperation des posts
	function getPosts()
	{
		$bdd = dbConnect();
		$Posts = $bdd->query("SELECT * FROM poster");
		
		return $Posts;
	}
	//Fonction de recuperation d'un post en passant son id
	function getPost($idPost)
	{
		$bdd = dbConnect();
		$Post = $bdd->prepare("SELECT pseudo, message FROM poster WHERE Id = :identifiant");
		$Post->exec(array("identifiant"=>$idPost));
		return $Post;
	}
	//Fonction de recuperation des commentaires en passant l'id du poste
	function getComments($idPost)
	{
		$bdd = dbConnect();
		$Comments = $bdd->prepare("SELECT commentaire, id_post FROM post_commente WHERE id_post = :identifiant");
		$Comments->exec(array('identifiant'=>$idPost));
		return $Comments;
	}

	//Fonction de connection à la base de donnée 
	function dbConnect()
	{
		try {
			$bdd = new PDO("mysql:host=localhost;dbname=posts",'root','');
			return $bdd; 
		} catch (Exception $e) {
			die("Erreur :".$e->getMessage());
		}

	}

