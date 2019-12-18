<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magasin</title>
</head>
<body>

<form action="" method="post">
<input type="text" name="txt" id="sbmt">
<input type="submit" value="Ok">
</form>


<?php

session_start();
$Produits = $_SESSION['Produits']; 


foreach($Produits as $produit){
   
  foreach($produit as $element){
    echo '- '.$element.'  ';
         
      }
      echo'<br/>';
}
// si on complète le formulaire  (champs + boutons) on execute la fonction afficher avec le champs txt
if(isset($_POST['txt']))
{
   
    supprimer($_POST['txt'],$Produits);}

function supprimer($x,$Produits)
{// refresh pr effacer les résultats d'avant 
    foreach($Produits as $produit){
    unset($Produits[array_search($x, $produit)]);  
  }


  foreach($Produits as $produit){
   
    foreach($produit as $element){
      echo '- '.$element.'  ';
           
        }
        echo'<br/>';
  }
}
 // récupérer le tableau   



     ?>
</body>
</html>
