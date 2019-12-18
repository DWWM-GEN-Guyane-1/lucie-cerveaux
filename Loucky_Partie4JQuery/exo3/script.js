function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifnomprenom(champ)
{
   var regex = /^[a-zA-Z_-]+$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }}

   function veriftel(champ)
   {
      var regex = /^[0-9]+$/;
      if(!regex.test(champ.value))
      {
         surligne(champ, true);
         return false;
      }
      else
      {
         surligne(champ, false);
         return true;
      }}



function verifForm(f)
{
   
    
   var nomOk = verifnomprenom(f.nom);
 
   var prenomOk = verifnomprenom(f.prenom);
  
   var mailOk = verifMail(f.email);
  
 
   
   var telOk = veriftel(f.tel);
  
  
   if(nomOk && prenomOk && mailOk && telOk)
    {return true;
  }

   else
   {
      alert("Te fous pas de ma gueule! Va remplir correctement tous les champs");
      return false;
   }
}