    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice 7 variable</h1>
        <?php
            //Créer trois variables nom , prénom et âge et initialiser avec les valeurs de votre choix. Attention, l' âge est de type entier.
            //Afficher: "Bonjour" + nom + prénom + ", tu as" + age + "ans".
            

            $nom= "cerveaux "; 
            $prenom= "lucie";
            $age= 32;
            echo "Bonjour ".$nom. $prenom.", tu as " . $age." ans";
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>