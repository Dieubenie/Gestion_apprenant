<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste/Apprenants</title>
    <?php include 'style.php';?>
</head>
<body>
<?php include 'menu_page.php';?>  
      <h1 style="font-family: Algerian; text-align: center;">LISTE DES APPRENANTS</h1>
<div class="container-fluid">
      <table class="table table bordered" border="1">
  <thead class="table-dark">
    <tr>
        <th>N°</th>
        <th>NOM </th>
        <th>PRENOM</th>
        <th>SEXE</th>
        <th>TELEPHONE</th>
        <th>ADRESSE</th>
        <th>TUTEUR</th>
    </tr>
  </thead>
  <tbody > 
  <tr>
  <?php
  try {

  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=bd_gestion","root","");

  $sql = $pdo->query('SELECT * FROM apprenant ORDER BY nom ASC');
  $i = 0;
  while ($donnees = $sql->fetch()) {

  if ($donnees['code_tuteur']) {
  $reqtuteur = $pdo->query("SELECT nom,prenom FROM tuteur WHERE code_tuteur=$donnees[code_tuteur]");
  while ($tuteur = $reqtuteur->fetch()) {
  $nom = $tuteur['nom'];
  $prenom = $tuteur['prenom'];
  }
  }
  $i++;
  echo "<tr>";
  echo "<td> $i </td>";
  echo "<td> $donnees[nom] </td>";
  echo "<td> $donnees[prenom] </td>";
  echo "<td> $donnees[sexe] </td>";
  echo "<td> $donnees[num_tel] </td>";
  echo "<td> $donnees[adresse] </td>";
  echo "<td>" . $nom . " " . $prenom . "</td>";
  echo "</tr>";
  }
  $sql->closeCursor();
  } catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
  }
  ?>
  </tr>
  </tbody>
</table> <br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="formulaire_apprenant.php">
  <button type="submit" class="btn btn-danger me-md-2 " name="ajouter" type="button">Nouveau</button>
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