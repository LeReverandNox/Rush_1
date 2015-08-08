<!DOCTYPE html> <!-- indicateur qui permet au navigateur de savoir quelles règles appliquer pour la mise en page du document. -->
<html>
    <head>


        <meta charset="utf-8" />    <!-- meta (=métadonnée) c'est une donnée servant à définir ou décrire une autre donnée quel que soit son support(pour notre cas une page HTML). charset encodage déclaré avec la norme et utf-8(=Universal Character Set - 8 bits ) codage informatique pour gérer le plus simplement possible des textes et leurs traductions dans tous les systèmes d’écritures et tous les alphabets du monde.   -->
        <link rel="stylesheet" href="my_style.css" />
        <title>Rush 01 - Etape 01</title> <!-- Titre -->
    </head>
    <body>
        <form class="formulaire" action="my_form.php" method="post">  <!--"form" balise principal du formulaire, "method" est un attribut qui indique par quel moyen les données vont etre envoyé ? ; "Action"  c'est l'adresse de la page ou du programme qui va traiter les informations  -->
            <fieldset>
                <legend>Formulaire</legend>

                <label for="sexe">Sexe : </label>   <!-- c'est une étiquette donnée à un element dans ce cas l'étiquette à l'élèment est le "sexe" -->
                <input type="radio" name="sexe" value="Homme" /> Homme   <!-- input  sert  inserer(=creer) un champs de saisie ; "type" ensuite type de saisie (radio  permet de faire SEULEMENT  un choix parmi une liste de possibilités); "Name" donne un nom de él'lèment du formulaire; "value" prépremplie le champs avec une valeur -->
                <input type="radio" name="sexe" value="Femme" /> Femme <br /> <!-- inserer un champs de saisie de type radio seulement 1 choix parmi une liste défini pour nom comme element sexe avec comme choix femme -->

                <label for="civilite">Civilité : </label>
                <select class="civilitle" name="civilite">
                    <option value="m">M.</option>
                    <option value="mme">Mme.</option>
                    <option value="mlle">Mlle.</option>
                </select>

                <br />
                <label for="nom">Nom : </label>
                <input type="text" name="nom" required minlength=2 />

                <br />
                <label for="nom">Prenom : </label>
                <input type="text" name="prenom" required minlength=2 />

                <br />
                <label for="email">Email : </label>
                <input type="email" name="email" required/>

                <br />
                <label for="telephone">Telephone : </label>
                <input type="tel" name="telephone" required/>

                <br />
                <label for="website">Site web : </label>
                <input type="url" name="website" required/>

                <br />
                <label for="date_de_naissance">Date de naissance : </label>
                <input type="date" name="date_de_naissance" required />

                <br />
                Vos hobbies ?<br />
                <label for="hobbies">Jeux video</label><input type="checkbox" name="hobbies" value="jeuxvideo" />
                <br />

                <label for="hobbies">Cinema</label><input type="checkbox" name="hobbies" value="cinema" />
                <br />

                <label for="hobbies">Lecture</label><input type="checkbox" name="hobbies" value="lecture" />
                <br />

                <label for="hobbies">Sport</label><input type="checkbox" name="hobbies" value="sport" />
                <br />

                <label for="hobbies">Informatique</label><input type="checkbox" name="hobbies" value="informatique" />
                <br />

                <br />
                <input type="hidden" name="token" value="my first website">

                <br />
                <input type="submit" value="Validation">
            </fieldset>
        </form>
    </body>
</html>