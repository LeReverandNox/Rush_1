<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="ajax.js"></script>
        <link rel="stylesheet" type="text/css" href="my_css.css"/>      
        <title>Login</title>
    </head>
    <body>
        <fieldset>
            <legend>Connexion</legend>
        <h1>Veuillez vous connecter :</h1>
        <form name="formulaire" id="formulaire">
            <p><label for="username" >Username :  </label><input type="text" id="username" name="username" /></p>
            <p><label for="password">Password : </label><input type="password" name="password" id="password" /></p>
            <input type="submit" id="connexion" value="Connexion"/>
            <div id="resultat"></div><!-- On met une div vide pour afficher le message de l'ajax -->
        </fieldset>
        </form>
    </body>
</html>





