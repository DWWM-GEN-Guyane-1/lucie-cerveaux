


$(document).ready(function(){ 
    
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#calculer").click(function(){
   var nom = document.getElementById('case1').value;
   var prenom = document.getElementById('case2').value;
   var dn = document.getElementById('case3').value;
   var ln = document.getElementById('case4').value;
   var em = document.getElementById('case5').value;   
   var so = document.getElementById('case6').value;
   
   
   var res=prenom+ " "+ nom + ", né le "+ dn + " à " + ln+ ", actuellement "+em + " à "+so;
    
    document.getElementById('presentation').value=res;    
    


    });
    
});