    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part3.4 variable</h1>
        <?php
            /*Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur
            */
            
            
            $uno= 1; 
            
            while ($uno<10){
	        echo $uno."</br>";
             $uno+=$uno/2;
}
            
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>