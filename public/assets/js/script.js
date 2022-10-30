    function activeConfirme()  {

    var result = confirm("Voulez vous activer la structure ?");

    if(result)  {
    alert("Vous venez d'activer la structure !");
} else {
    alert("La structure n'a pas été activer.");
}
}

    function desactiveConfirme()  {

    var result = confirm("Voulez vous désactiver la structure ?");

    if(result)  {
    alert("Vous venez de désactiver la struture !");
} else {
    alert("La structure n'a pas été désactiver.");
}
}



    function optionsConfirme()  {

        var result = confirm("Vous êtes sur le point de modifier les options de la structure.");

        if(result)  {
            alert("Félicitation, vous venez de modifier les options de la structure.")
        } else {
            alert("Les options n'ont pas été modifié.");
        }
    }