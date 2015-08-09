<?php
$users = ['bobby' => 'azerty', 'carotte' => 'qwerty', 'johnny' => 'twerty'];
// Les 3 utilisateurs sont stockes dans un tableau associatif.

// On test les valeurs des 2 inputs avec empty()
if (!empty($_POST['password']) && !empty($_POST['username']))
{
    //On boucle sur les elements du tableau des utilisateurs...
    foreach ($users as $user => $password)
    {
        // Et on les test avec nos 2 inputs.
        if ($_POST['username'] === $user && $_POST['password'] === $password)
        {
            // Si ca match, on retourne 1 vers l'ajax
            echo "1";
        }
    }
}
else
{
    // Sinon on retourne 0
    echo "0";
}
?>