

$(document).ready(function(){ 
    var total=0;
    var victoireU=0;
    var defaiteU=0;
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        var ordinateur=Math.round(Math.random() * 2)
        document.getElementById('listordinateur').selectedIndex=ordinateur;
        var utilisateur=document.getElementById('listutilisateur').selectedIndex;
     total++;

        if ((ordinateur===2 && utilisateur===1)||(ordinateur===0 && utilisateur===2)||(ordinateur===1 && utilisateur===0)) 
        {document.getElementById("case1").value="Bravo ordinateur";
            defaiteU++;
        }
        else 
        {

            if ((utilisateur===2 && ordinateur===1)||(utilisateur===0 && ordinateur===2)||(utilisateur===1 && ordinateur===0)) 
            {document.getElementById("case1").value="Bravo utilisateur";
            victoireU++;
            }
            else 
            {document.getElementById("case1").value="Match nul";
    
            }

        }

        document.getElementById("case2").value=(victoireU/total)*100;
        document.getElementById("case3").value=(defaiteU/total)*100;


    });
    
});