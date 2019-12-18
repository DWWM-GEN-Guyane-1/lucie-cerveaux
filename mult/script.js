

$(document).ready(function(){ 
    
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        //rcupérer la valeur saisie dans le champs
       var chiffre=document.getElementById('case2').value; 
       // répeter ça 10 fois
       for ( var i = 1; i <= 10; i++ ) {
         //chiffre x i =resultat (chiffre*i) puis saut de ligne 
           document.write(chiffre+" x "+i+"="+chiffre*i+"<br>");
       }    

    });
    
});