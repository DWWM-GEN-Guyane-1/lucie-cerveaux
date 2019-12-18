    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part3.1 variable</h1>
        <?php
            /*Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :
            l'afficher puis l'incrementer 
            */
            
            
            $age= 0; 
            while($age<10)
            {
				echo $age."</br>";
               $age++;

            }
            
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>