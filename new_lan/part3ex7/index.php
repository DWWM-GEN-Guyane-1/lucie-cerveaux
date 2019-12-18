    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part3.7 variable</h1>
        <?php
            /*En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

 */
            
            
            $uno= 1; 
            for ($uno=1; $uno<100; $uno+=15) {
				echo $uno."On tient le bon bout</br>";
            }
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>