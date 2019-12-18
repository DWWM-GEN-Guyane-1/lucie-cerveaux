    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice 8 variable</h1>
        <?php
            //Créer 3 variables.
            //Dans le premier cas, le résultat de l'opération 3 + 4 .
            //Dans le deuxième résultat de l'opération 5 * 20 .
            //Dans la third le Mettre de l'opération Résultat 45/5 .
            //Afficher le contenu des variables.
            

            $somme= 3+4; 
            
            $produit= 5*20;
           
            $div= 45/5;
           
            
            echo $somme.'<br/>'.$produit.'<br/>'.$div;
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>