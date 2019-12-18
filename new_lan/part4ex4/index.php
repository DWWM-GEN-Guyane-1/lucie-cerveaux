    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part4.3 fonction</h1>
        <?php
/*Faire une fonction qui prend en paramètre deux chaînes de caractères et qui revoit la concaténation de ces deux chaînes */
            
            function one ($coco,$ballon){
            return ($coco.$ballon);
            }

            
            
            
            echo one("string ","pantalon"); 
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>