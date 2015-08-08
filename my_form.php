<!DOCTYPE html> <!-- indicateur qui permet au navigateur de savoir quelles règles appliquer pour la mise en page du document. --> 
<html>
    <head>
        <meta charset="utf-8> <!-- meta (=métadonnée) c'est une donnée servant à définir ou décrire une autre donnée quel que soit son support(pour notre cas une page HTML). charset encodage déclaré avec la norme et utf-8(=Universal Character Set - 8 bits ) codage informatique pour gérer le plus simplement possible des textes et leurs traductions dans tous les systèmes d’écritures et tous les alphabets du monde.   -->
        <title>Rush 01 - Etape 01</title>  <!-- Titre (non visible)  -->
    </head> 
    <body>
        <h1>Formulaire</h1> <!-- Balise H1 c'est le titre princiapl -->
        <form class="formulaire" action="my_form.php" method="post"> <!--balise principal du formulaire, method est un attribut qui indique par quel moyen les données vont etre envoyé ? ; "Action"  c'est l'adresse de la page ou du programme qui va traiter les informations  --> 
            <label for="sexe">Sexe : </label> <!-- c'est une étiquette donnée à un element dans ce cas l'étiquette à l'élèment est le "sexe" -->
            <input type="radio" name="sexe" value="Homme" /> Homme <br /> <!-- input  sert  inserer(=creer) un champs de saisie ; "type" ensuite type de saisie (radio  permet de faire SEULEMENT  un choix parmi une liste de possibilités); "Name" donne un nom de él'lèment du formulaire; "value" prépremplie le champs avec une valeur -->
            <input type="radio" name="sexe" value="Femme" /> Femme <br /> <!-- inserer un champs de saisie de type radio seulement 1 choix parmi une liste défini pour nom comme element sexe avec comme choix femme -->

            <label for="civilite">Civilité : </label>
            <input type="select" name="civilite" value="">

            <br />
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>