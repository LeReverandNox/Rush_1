var error = false; //On définit un boolen global qui passe à true en cas d'erreur

/* Une fonction qui passe le background en rouge en cas d'erreur, ou le reset
le cas contraire */
function highlight(field, error) {
    if (error) {
        field.style.backgroundColor = "red";
    } else {
        field.style.backgroundColor = "";
    }
}

// Une fonction pour tester les boutons radio de sexe
function check_sexe(field1, field2) {
    if (!field1.checked && !field2.checked) {
        alert("Veuillez choisir votre sexe");
        error = true;
    }
}

// Une fonction pour tester les valeurs du select de civilite
function check_civilite(field) {
    if (!field.value) {
        alert("Veuillez choisir une civilite");
        error = true;
    }
}

// Une fonction pour tester le nom/prenom
function check_names(field) {
    if (field.value.length === 0) {
        highlight(field, true);
        error = true;
    } else if (field.value.length < 2) {
        field.value = "Nom trop court";
        highlight(field, false);
        error = true;
    } else {
        highlight(field, false);
    }
}

// Une fonction pour tester l'email avec une regex
function check_mail(field) {
    var regex = /^[a-zA-Z0-9._\-]+@[a-z0-9._\-]{2,}\.[a-z]{2,4}$/;
    if (field.value.length === 0) {
        highlight(field, true);
        error = true;
    } else if (!regex.test(field.value)) {
        field.value = "Mail errone";
        highlight(field, false);
        error = true;
    } else {
        highlight(field, false);
    }
}

// Une fonction pour tester le n. de telephone avec une autre regex
function check_phone(field) {
    var regex = /0[1-8]([\-.\ ]?[0-9]{2}){4}/;
    if (field.value.length === 0) {
        highlight(field, true);
        error = true;
    } else if (!regex.test(field.value)) {
        field.value = "Telephone errone";
        highlight(field, false);
        error = true;
    } else {
        highlight(field, false);
    }
}

// Une fonction pour tester l'url avec une.... regex encore.
function check_website(field) {
    var regex = /^https?:\/\/(www\.)?[\-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([\-a-zA-Z0-9@:%_\+.~#?&\/=]*)$/;
    if (field.value.length === 0) {
        highlight(field, true);
        error = true;
    } else if (!regex.test(field.value)) {
        field.value = "URL errone";
        highlight(field, false);
        error = true;
    } else {
        highlight(field, false);
    }
}

// Et encore une fonction pour tester la date de naissance avec une.... REGREX !
function check_date_de_naissance(field) {
    var regex = /^(0[1-9]|[12][0-9]|3[01])[\/.](0[1-9]|1[012])[\/.](19|20)\d\d$/;
    if (field.value.length === 0) {
        highlight(field, true);
        error = true;
    } else if (!regex.test(field.value)) {
        field.value = "Date de naissance errone";
        highlight(field, false);
        error = true;
    } else {
        highlight(field, false);
    }
}

// La meta=fonction qui appelle toutes les verifications.
function check_form() {

    // On stock chaque element dans une variable
    var homme = document.getElementById("homme");
    var femme = document.getElementById("femme");
    var civilite = document.getElementById("civilite");
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var email = document.getElementById('email');
    var telephone = document.getElementById('telephone');
    var website = document.getElementById('website');
    var date_de_naissance = document.getElementById('date_de_naissance');

    // On effectue tous les tests
    check_sexe(homme, femme);
    check_civilite(civilite);
    check_names(nom);
    check_names(prenom);
    check_mail(email);
    check_phone(telephone);
    check_website(website);
    check_date_de_naissance(date_de_naissance);

    // Si le boolen est passé à true pour cause d'erreur...
    if (error === true) {

        // On affiche une erreur grace à alert()
        alert("Le formulaire comporte des erreurs, veuillez verifier vos informations !");
        error = false;
        // Et on empeche l'envoie du formulaire
        return false;

    // Sinon, on le formulaire est envoyé.
    } else {
        return true;
    }
}