<!--Recuperation et affichage-->
<?php
	
	require('model.php');

	$querySelect = getPosts();

	require('affichageMessage.php');
