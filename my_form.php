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
                <legend>Informations Personnelles</legend>

                <label for="sexe" class="border">Sexe : </label>   <!-- c'est une étiquette donnée au champs saisie dans ce cas l'étiquette au champs est le "sexe"(ou nous affiche le nom de du champs de saisie ) -->
            <div id="sexe">
                <input type="radio" name="sexe" id="homme" class="sexe" value="Homme" checked /><label for="homme">Homme</label> <!-- input  sert  inserer(=creer) un champs de saisie ; "type" ensuite type de saisie (radio  permet de faire SEULEMENT  un choix parmi une liste de possibilités); "Name" donne un nom de él'lèment du formulaire; "value" prépremplie le champs avec une valeur -->
                <input type="radio" name="sexe" id="femme" class="sexe" value="Femme" /><label for="femme">Femme</label> <!-- inserer un champs de saisie de type radio seulement 1 choix parmi une liste défini pour nom comme element sexe avec comme choix femme -->
                <br /><br />
            </div>

                <label for="civilite" class="border">Civilité : </label> <!-- civilité est le nom de l'étiquette du champs de saisie -->
                <select class="civilite" name="civilite" id="civilite"> <!-- balise select c'est une liste à choix multiple pour nom civilité a l'élèment -->
                    <option value="m">M.</option>  <!-- la balise option nous donne les choix possible "M. Mme Mlle." -->
                    <option value="mme">Mme.</option>
                    <option value="mlle">Mlle.</option>
                </select>

                <br /><br />

                <label for="nom" class="border">Nom : </label>  <!--Label "Nom" est le nom de l'étiquette du champs de saisie  -->
                <input type="text" name="nom" id="nom" minlength=2 /> <!-- créer un champs de saisie de type text avec une zone de texte pour nom de l'élèment "nom" -->

                <br /><br />

    
                <label for="prenom" class="border">Prenom : </label> <!--Label "Prénom" sur l'étiquette du champs de saisie-->
            <div class="blue_border">
               <input type="text" name="prenom" id="blue_border" minlength=2 />  <!-- creer un champs de saisie de type text avec une saisie de texte pour nom de l'élèment prenom -->
            </div>           
                <br /><br />

                <label for="date_de_naissance" class="border">Date de naissance : </label> <!-- label "date de naissance" sur l'étiquette du champs de saisie -->
                <input type="date" name="date_de_naissance" id="date_de_naissance" /> <!-- creer un champs de saisie de type date avec une saisie ../../.... ou sous forme de calendrier  -->

                <br /><br />

            </fieldset>
            <fieldset>
                <legend>Contacts</legend>

                <label for="email" class="border">Email : </label> <!-- label "email" sur l'étiquette du champs de saisie  -->
                <input type="email" name="email" id="email" /> <!-- crée un champs de saisie de type email avec une saisie de d'adresse mail pour nom  de l'element "email" -->
                <br /><br />

                <label for="telephone" class="border">Telephone : </label> <!-- label "telephone" sur l'étiquette du champs de saisie -->
                <input type="tel" name="telephone" id="blue_border" /> <!-- crée un champs de saisie de type tel avec une saisie par numéro (affiche sur smartphone le clavier numérique ) pour nom comme element "telephone" -->

                <br /><br />

            </fieldset>
            <fieldset>
                <legend>Autres</legend>

                <label for="website" class="border">Site web : </label> <!-- label "telephone" sur l'étiquette du champs de saisie -->
            <div class="Site_web">
                <input type="url" name="website" id="website" /> <!-- creer un champs de saisie de type url avec une saisie par url pour nom "website" -->
            </div>
                <br /><br />
                
               
                <label for="hobbies" class="border">Hobbies : </label><br />
                <label for="jeuxvideo"class="right">Jeux video</label><input type="checkbox" name="hobbies" id="jeuxvideo" value="jeuxvideo" /> <!-- label "hobbies" sur letiquette de champs de saisie  -->       <!-- creer un champs de saisise de type  pour une case que l'on peut cocher ou décocher, sous le nom "hobbies " avec comme choix "jeuxvideo" "cinema" "lecture" "sport" "informatique". -->

                <label for="cinema" class="right" >Cinema</label><input type="checkbox" name="hobbies" id="cinema" value="cinema" />

                <label for="lecture" class="right" >Lecture</label><input type="checkbox" name="hobbies" id="lecture" value="lecture" />

                <label for="sport" class="right" >Sport</label><input type="checkbox" name="hobbies" id="sport" value="sport" />

                <label for="informatique" class="right" >Informatique</label><input type="checkbox" name="hobbies" id="informatique" value="informatique" />

                <input type="hidden" name="token" value="my first website">   <!-- crée un champs de saisie de type hidden champs de saisie  caché dans le formulaire avec comme valeur donnée  "my first website" -->
                <br />
                <br />
                <input type="submit" value="Validation"> <!-- crée un élèment de type submit transmet tout les informations contenue dans le formulaire url "action" <form> avec comme valeur "Validation" -->
            </fieldset>
        </form>
    </body>
</html>