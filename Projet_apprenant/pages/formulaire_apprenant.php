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
<h1 style="font-family: Castellar;"> INSEREZ UN APPRENANT</h1>
<div class="container-fluid ">
<form>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Nom" >
  </div>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Prenom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <input type="name" class="form-control" placeholder="Sexe" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <input type="number" class="form-control" placeholder="Telephone" >
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Adresse">
  </div>
  <div class="mb-3">
    <select class="form-select"  aria-label="Default select example">
  <option selected > Tuteur </option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
</form>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-danger me-md-2 " type="button">Ajouter</button>
  <button class="btn btn-danger " type="button">Annuler</button>
</div> 
</div>
<br>
     
      <?php include 'pied.php';?>
      <?php include 'script.php';?>
</body>
</html>