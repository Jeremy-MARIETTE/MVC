<?php
session_start();
ini_set('display_errors', 1);


try {
	
	$bdd = new PDO('mysql:host=localhost;dbname=creaweb','root','root');
	//$bdd = new PDO('mysql:host=localhost:3307;dbname=cdf','root','CaenNormandie14');
} catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
    exit;
}


if(!empty($_GET['page']) AND is_file('controllers/'.$_GET['page'].'.php')){ //is_file = si fichier présent sur le serveur
	include('controllers/'.$_GET['page'].'.php');

	if(isset($_GET['action'])){
		if($_GET['action' =='addPost']){
			//addPost();
			
			echo "routeur";
		}
	}

}else{
	include('controllers/index.php');

}

?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


