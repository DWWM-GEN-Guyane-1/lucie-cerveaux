    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part4.4 fonction</h1>
        <?php
/*Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner:

e premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux*/
            
            function one ($a,$b){
            if ($a>$b)
            {
                return " petit b";
            }

              else
              if{ ($a<$b){
                  return "petit a"
                
              }
            else if {

            ($a=!$b)
                return "identique"
            }

            else { }
            
            
            
            echo one("string ","pantalon"); 
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>