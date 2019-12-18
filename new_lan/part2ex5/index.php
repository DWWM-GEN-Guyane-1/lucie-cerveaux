    <!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>exercice part2.5 variable</h1>
        <?php
            /*Traduire ce code avec des if et des else :

<?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>
            */
            
    $gender='Homme';
    if ($gender != 'Homme'){
        echo 'C\'est une développeuse !!!';
    }
    else{
        echo 'C\'est un développeur !!!';
    }
    
            
          /*Ceci est un commentaire PHP*/
        ?>
        
    </body>
</html>