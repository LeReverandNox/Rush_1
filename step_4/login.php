<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="my_css.css"/>      
        <title>Login</title>
    </head>
    <body>
        <fieldset>
            <legend>Connexion</legend>
        <h1>Veuillez vous connecter :</h1>
        <form name="formulaire" id="formulaire" action="process.php" method="post">
            <p><label for="username" >Username :  </label><input type="text" id="username" name="username" /></p>
            <p></p><label for="password">Password : </label><input type="password" name="password" id="password" /></p>
            <input type="submit" value="Connexion"/>
        </fieldset>
        </form>
    </body>
</html>




