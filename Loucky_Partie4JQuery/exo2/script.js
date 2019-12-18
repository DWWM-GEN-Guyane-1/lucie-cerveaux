


$(document).ready(function(){ 
    
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#calculer").click(function(){
   
      var res=(document.getElementById('case1').value+"+"+
      document.getElementById('case2').value+"+"+
      document.getElementById('case3').value+"+"+
      document.getElementById('case4').value+"+"+
      document.getElementById('case5').value);
    res=eval(res)/5;
      document.getElementById('moyenne').value=res;
if(res>=0 && res<10){document.getElementById('app').value="En dessous de la moyenne";}
else{
    if (res>=10 && res<13) {document.getElementById('app').value="Moyen";}
    else{
        if(res>=13 && res<16) {document.getElementById('app').value="Bien";}
    else{
        if(res>=16 && res<20) {document.getElementById('app').value="Très bien";}
    else{
        if(res===20) {document.getElementById('app').value="Excellent";}
    
    }
    }
    }
}

    });
    
});