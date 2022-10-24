    function activeConfirme()  {

    var result = confirm("Voulez vous activer la structure ?");

    if(result)  {
    alert("Vous venez d'activer la struture !");
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

    function disconnectConfirm()  {

        var result = confirm("Voulez vous, vous déconnectez de la plateforme SPORT 64 ?");

        if(result)  {

        } else {
            alert("Tout va bien, vous être toujours connecté à la plateforme SPORT 64");
        }
    }

    function connectConfirm()  {

        var result = confirm("Vous êtes sur le point de vous connecter à la plateforme SPORT 64 ...");

        if(result)  {

        } else {
            alert("La connexion à la plateforme a été annulé !");
        }
    }