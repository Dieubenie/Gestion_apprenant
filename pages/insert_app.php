<?php

if(isset($_POST['ajouter'])){

  try {
    
  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=bd_gestion", "root", "");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $sexe = $_POST['sexe'];
  $num_tel = $_POST['num_tel'];
  $adresse = $_POST['adresse'];
  $code_tuteur = $_POST['code_tuteur'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `apprenant`(`nom`, `prenom`, `sexe`, `num_tel`, `adresse`, `code_tuteur`) VALUES (:nom,:prenom,:sexe,:num_tel,:adresse,:code_tuteur)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":sexe"=>$sexe,":num_tel"=>$num_tel,":adresse"=>$adresse,":code_tuteur"=>$code_tuteur));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>