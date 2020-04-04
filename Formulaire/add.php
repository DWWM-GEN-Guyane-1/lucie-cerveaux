<?php
// On commence par récupérer les champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['icq']))      $icq=$_POST['icq'];
else      $icq="";

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['url']))      $url=$_POST['url'];
else      $url="";

// On vérifie si les champs sont vides
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($titre) OR empty($url))
    {
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else     
    {

       // connexion à la base
$db = mysqli_connect("localhost","root","","formulaire")  or die('Erreur de connexion '.mysqli_error($db));

    
    // on écrit la requête sql
    $sql = "INSERT INTO new_table(nom, prenom,email, icq, titre, url) VALUES('$nom','$prenom','$email','$icq','$titre','$url')";
    
    // on insère les informations du formulaire dans la table
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';

    mysqli_close($db);  // on ferme la connexion
    } 
?>
