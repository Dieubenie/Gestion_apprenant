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
<h1 style="font-family: Castellar;text-align: center;"> INSEREZ UN TUTEUR</h1>
<div class="container ">
<form  action="insert_tut.php" method="post" >
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Nom" name="nom">
  </div>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Prenom" name="prenom">
  </div>
  <div class="mb-3">
  <select class="form-select"  aria-label="Default select example" name="sexe">
  <option selected > Sexe </option>
  <option value="Masculin">Masculin</option>
  <option value="Feminin">Feminin</option>
  </select>
  </div>
  <div class="mb-3">
    <input type="number" class="form-control" placeholder="Telephone" name="num_tel" min="0" >
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
  </div>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Profession" name="profession">
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