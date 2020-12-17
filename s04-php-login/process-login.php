<?php

include './data/users.php';

// Cherche l'utilisateur correspondant à l'e-mail entré dans le formulaire
$user = findUserByEmail($_POST['email']);

// Si l'utilisateur n'existe pas
if (is_null($user)) {
    header('Location: /login.php?error=1');
} else {
    // Si le mot de passe de l'utilisateur correspond au mot de passe entré dans le formulaire
    if (password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['currentUser'] = $user['email'];

        header('Location: /profile.php');
    } else {
        header('Location: /login.php?error=2');
    }
}
