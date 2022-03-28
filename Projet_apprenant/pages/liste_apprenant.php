<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'style.php';?>
</head>
<body>
<?php include 'menu_page.php';?>  
      <h1 style="font-family: Algerian; text-align: center;">LISTE DES APPRENANTS</h1>
<div class="container-fluid">
      <table class="table table bordered border-dark" border="1">
  <thead class="table-dark">
    <tr>
        <td>N°</td>
        <td>NOM </td>
        <td>PRENOM</td>
        <td>SEXE</td>
        <td>TELEPHONE</td>
        <td>ADRESSE</td>
        <td>TUTEUR</td>
    </tr>
  </thead>
  <?php

try {
    // se connecter à mysql
    $pdo = new PDO("mysql:host=localhost;dbname=bd_gestion", "root", "");
} catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
}

// mysql select query
//$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
$q = $pdo->prepare('SELECT * FROM apprenant');

$q->execute();
$data = $q->fetchAll();

?>
  <tbody >
  <?php
foreach ($data as $donnee) {
?>
  <tr>
        <td>  <?php echo $donnee['code_apprenant']; ?></td>
        <td>  <?php echo $donnee['nom']; ?></td>
        <td>  <?php echo $donnee['prenom']; ?></td>
        <td>  <?php echo $donnee['sexe']; ?></td>
        <td> <?php echo $donnee['num_tel']; ?></td>
        <td> <?php echo $donnee['adresse']; ?></td>
        <td> <?php echo $donnee['code_tuteur']; ?></td>
    </tr>
    <?php
            }
            ?>
  </tbody>
</table> <br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="formulaire_apprenant.php">
  <button class="btn btn-danger me-md-2 " type="button">Nouveau</button>
  </a>
  <a href="javascript:window.print()">
  <button class="btn btn-danger " type="button">Imprimer</button>
  </a>
</div>
</div> 
<br>
      <?php include 'pied.php';?>
      <?php include 'script.php';?>
</body>
</html>