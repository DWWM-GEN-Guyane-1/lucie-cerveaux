
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>


<!--  action vers la meme page avec la method post, label + bouton -->

<form action="rechercherProduits.php" method="post">
            <label>Quantité </label><input type="text" name="txt" />
            <input type="submit" name="insert" value="Afficher" />
           
</form>
 
 


 <?php

// si on complète le formulaire  (champs + boutons) on execute la fonction afficher avec le champs txt
if(isset($_POST['txt']))
{afficher($_POST['txt']);}

function afficher($x)
{// refresh pr effacer les résultats d'avant 
    header("refresh");

 // récupérer le tableau   
session_start();
$Produits = $_SESSION['Produits'];


// pour chauque produit parmi les produits
foreach($Produits as $produit){
    // si le champs quantité est >= x (txt dans l'appel de la fonction)
if  ($produit['quantite']>=$x)
{
// dans ce cas afficher les éléments du produit 
  foreach($produit as $element){
     
          echo '- '.$element.'  ';
      }
}
  
  echo'<br/>';
}

}
     ?>
</body>
</html>