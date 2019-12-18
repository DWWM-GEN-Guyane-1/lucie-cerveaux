    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part3.2 variable</h1>
        <?php
            /*Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieure à 20 :

multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable 
            */
            
            
            $uno= 0; 
            $deu= 30;

            
            while ($uno<20){
	    echo ($uno*$deu)."</br>";
             $uno++;
}
            
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>