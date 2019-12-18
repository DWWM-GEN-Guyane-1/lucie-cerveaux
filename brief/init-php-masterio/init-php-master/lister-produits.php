<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magasin</title>
</head>
<body>
<h1>Articles en stocks - marque Haribo</h1>
    <ul>
        <li>Tagada</li>
        <li>Schtroumpfs</li>
        <li>Croco</li>
    </ul>
   <?php
    // $produits = [
    //             'Tagada' => ['prix' => 1, 'quantite' => 10],
    //             'Schtroumpfs' => ['prix' => 1.5, 'quantite' => 10],
    //             'Croco' => ['prix' => 2, 'quantite' => 10]
    //         ]


    
            $produit=array();
            $produit['nom']="Tagada";
            $produit['prix']=1;
            $produit['quantite']=50;
            echo " Article: " .$produit['nom'] ." Prix (€): " .$produit['prix'] ." Quantité: " .$produit['quantite'] ."||";
        
            $produit=array();
            $produit['nom']="Croco";
            $produit['prix']=1.5;
            $produit['quantite']=50;
            echo " Article: " .$produit['nom'] ." Prix (€): " .$produit['prix'] ." Quantité: " .$produit['quantite'] ."||";
        
            $produit=array();
            $produit['nom']="Schtroumpfs";
            $produit['prix']=2;
            $produit['quantite']=50;
            echo " Article: " .$produit['nom'] ." Prix (€): " .$produit['prix'] ." Quantité: " .$produit['quantite'];
            



    $Produits=Array
(
    (0) => Array
        (
            'nom'=> 'Tagada',
            'prix'=> 1,
            'quantite'=> 50
        ),

    (1) => Array
        (
            'nom'=> 'Croco',
            'prix'=> 1.5,
            'quantite'=> 40
        ),

    (2) => Array
        (
            'nom'=> 'Schtroumpfs',
            'prix'=> 2,
            'quantite'=> 30
        )
);
            
    
session_start();
     
    $_SESSION['Produits'] = $Produits;
     
 
       ?>
</body>
</html>