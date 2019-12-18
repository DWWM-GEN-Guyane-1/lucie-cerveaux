    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part2.6 variable</h1>
        <?php
            /*Traduire ce code avec des if et des else :

<?php
  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>
            */
            
   
    $age=25;

    if ($age >= 18){
        echo 'Tu es majeur';
    }
    else{
        echo 'Tu n\'es pas majeur';
    }
    
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>