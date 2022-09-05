<?php
//conexion avec la data base
	try {
	$db= new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
	
} catch (Exception $e) {
	die('Erreur :'.$e -> getMessage());

}

$res=$db->prepare('INSERT INTO formulaire(nom, prenom,email,objet,message) VALUES (?,?,?,?,?)');

$res->execute(array($_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['objet'],$_POST['message']));
header('location:bd.php');
?>