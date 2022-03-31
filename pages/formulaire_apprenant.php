<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire/apprenant</title>
    <?php include 'style.php';?>
</head>
<body>
<?php include 'menu_page.php';?>  
<h1 style="font-family: Castellar;text-align: center;"> INSEREZ UN APPRENANT</h1>
<div class="container ">
<form action="insert_app.php" method="post" >
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Nom" name="nom" >
  </div>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Prenom" aria-describedby="emailHelp" name="prenom">
  </div>
  <div class="mb-3">
  <select class="form-select"  aria-label="Default select example" name="sexe">
  <option selected > Sexe </option>
  <option value="Masculin">Masculin</option>
  <option value="Feminin">Feminin</option>
  </select>
  </div>
  <div class="mb-3">
    <input type="number" class="form-control" placeholder="Telephone" name="num_tel">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
  </div>
  <div class="mb-3">
  <select class="form-select mb-3" aria-label="Default select example" name="code_tuteur" >
    <?php

     try {
      // se connecter à mysql
      $pdo = new PDO("mysql:host=localhost;dbname=bd_gestion","root","");
      } catch (PDOException $exc) {
      echo $exc->getMessage();
       exit();
                  }
       $tuteur = $pdo->query('SELECT * FROM tuteur');
        while ($donnees = $tuteur -> fetch()){
        echo '<option value="' .$donnees['code_tuteur']. '">'. $donnees['nom']. "  " . $donnees['prenom']. '</option>';
      }
      ?>
    </select>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-danger me-md-2 " name="ajouter" type="button">Ajouter</button>
  <button type="reset" class="btn btn-danger " type="button">Annuler</button>
</div>
</form>
</div>
<br>
     
      <?php include 'pied.php';?>
      <?php include 'script.php';?>
</body>
</html>