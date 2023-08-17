$(function(){
    $("#menu").click(function(){
        $("#choixmenu").toggle(1000);      
    });


    $("#menu2").click(function(){
        $("#blockAjout").toggle(1000);
    });

    
    $("#autre").click(function(){
        $("#champs2").slideDown(1000);
        $("#champs1").slideUp(1000);
    });
    $("#autre1").click(function(){
        $("#champs1").slideDown(1000);
        $("#champs2").slideUp(1000);
    });
    $("#alertSup").click(function(){
        alert("Un élément a été supprimer!");
    });
})