<!DOCTYPE html> <!-- indicateur qui permet au navigateur de savoir quelles règles appliquer pour la mise en page du document. -->
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="my_style.css" />
        <title>Rush 01 - Etape 01</title> <!-- Titre -->
    </head>
    <body>
        <form class="formulaire" action="my_form.php" method="post">
            <fieldset>
                <legend>Formulaire</legend>

                <label for="sexe">Sexe : </label>
                <input type="radio" name="sexe" value="Homme" /> Homme
                <input type="radio" name="sexe" value="Femme" /> Femme <br />

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