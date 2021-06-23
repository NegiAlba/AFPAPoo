<?php

require_once './config/config.php';

if ('POST' != $_SERVER['REQUEST_METHOD']) {
    echo "La page a laquelle vous tentez d'accéder n'existe pas !";
} else {
    if (isset($_POST['signup_submit'])) {
        //? Vérifier les inputs ici : Assainissement
        $email = strip_tags($_POST['signup_email']);
        $password = strip_tags($_POST['signup_password']);
        $password2 = strip_tags($_POST['signup_password2']);
        $username = strip_tags($_POST['signup_username']);

        //? Vérifier la concordance des mots de passe
        if ($password === $password2) {
            $data = [];

            $data['email'] = $email;
            $data['password'] = $password;
            $data['username'] = $username;

            $userDAO = new userDAO();

            $userDAO->signup($data);

            return header('Location: index.php?s');
        }

        return header('Location: login.php');
    }

    return header('Location: index.php?x');
}
