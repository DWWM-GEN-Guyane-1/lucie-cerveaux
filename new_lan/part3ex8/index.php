    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part3.8 variable</h1>
        <?php
            /*En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.

 */
            
            
            $uno= 200; 
            for ($uno=200; $uno>0; $uno-=12) {
				echo $uno."Enfin !!!!</br>";
            }
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>