$(document).ready(function()
{
    $("#connexion").click(function(e) /* Lors du clic sur le bouton Connexion, 
    on traite les elements suivants */
    {
    	e.preventDefault();
        $.post( // On envoie en POST...
            'process.php', // au script PHP...
            {
                username: $("#username").val(),  // les valeurs de nos input.
                password: $("#password").val()
            },

            function(resultat) // On traite la valeur renvoyee par le script PHP.
            {
                if(resultat == "1") /* Si il renvoie 1, on affiche un message et
                on redirige vers la page voulue */
                {
                    $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                    setTimeout(function(){ document.location.href="my_navigator.php"; }, 1500)
                    // Grace a setTimeout, on delay la redirection
                }
                else // SInon, on affiche un message d'erreur
                {
                    $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
            },
            'text' // On indique le type de la valeur renvoyee par le script PHP.
         );
    });
});
