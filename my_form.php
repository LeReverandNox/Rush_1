<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rush 01 - Etape 01</title>
    </head>
    <body>
        <h1>Formulaire</h1>
        <form class="formulaire" action="my_form.php" method="post">
            <label for="sexe">Sexe : </label>
            <input type="radio" name="sexe" value="Homme" /> Homme <br />
            <input type="radio" name="sexe" value="Femme" /> Femme <br />

            <label for="civilite">Civilité : </label>
            <input type="select" name="civilite" value="">

            <br />
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>