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
            /*Créer deux variables age et gender. La variable gender peut prendre comme valeur :

Homme
Femme
En fonction de l'âge et du genre afficher la phrase correspondante :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas.
            */
            
            $age= 25; 
            $gender= "Homme";

            
            
            if($gender=="Homme" && $age >=18){
               echo "Vous êtes homme et majeur";

            }
            else {
                if($gender=="Homme" && $age <18){
                    echo "Vous êtes homme et mineur"; 

                }
                else{
                    if($gender=="Femme" && $age >=18){
                        echo "Vous êtes femme et majeur"; 
    
                    }
                    else{
                        if($gender=="Femme" && $age <18){
                            echo "Vous êtes femme et mineur"; 
        
                        }
                        
                    }

                }
                
                }
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>