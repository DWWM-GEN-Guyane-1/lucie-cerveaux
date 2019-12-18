    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part2.1 variable</h1>
        <?php
            //Créer une variable age et l'initialiser avec une valeur.
            //Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. 
            //Dans le cas contraire, afficher Vous êtes mineur.
            
            
            $age= 4; 
        
            

            if($age>=18){
               echo "Vous êtes majeur";

            }
            else {echo "Vous êtes mineur";}
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>