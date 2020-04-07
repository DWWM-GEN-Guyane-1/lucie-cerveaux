<html>
<form method="POST" action="add.php">
<center>
<label >Nom </label><input type="text" name="nom"  required pattern="[A-Za-z]+"    maxlength="10"><br><br>
<label>Prénom </label><input type="text" name="prenom" required pattern="[A-Za-z]+"  maxlength="10"><br><br>
<label>Email </label><input type="email" name="email"   maxlength="50" required> <br><br>
<label>Titre </label><input type="text" name="titre"   maxlength="25" required> <br><br>
<label>Url</label><input type="url" name="url" maxlength="500" required><br><br>
<input type="submit" value="Envoyer" name="envoyer">
</center>
</form>


<style>
:valid {
   box-shadow: 0 0 2px 1px green;
}

label{
  display: inline-block;
  width: 90px;
  text-align: left;
}


</style>
</html>
