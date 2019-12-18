$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        $("p").hide();
    });
    $("#b2").click(function(){
        $("p").show();
    });
});