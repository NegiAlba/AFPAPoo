<?php

require_once './config/config.php';

if ('POST' != $_SERVER['REQUEST_METHOD']) {
    echo "La page a laquelle vous tentez d'accéder n'existe pas !";
    header('Location:index.php');
} else {
    var_dump($_POST);

    if (isset($_POST['signup_submit']) && !empty($_POST['signup_email']) && !empty($_POST['signup_password']) && !empty($_POST['signup_password2']) && !empty($_POST['signup_username'])) {
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

            return header('Location: login.php?s');
        }

        return header('Location: login.php?p');
    }

    if (isset($_POST['login_submit']) && !empty($_POST['login_email']) && !empty($_POST['login_password'])) {
        $email = strip_tags($_POST['login_email']);
        $password = strip_tags($_POST['login_password']);

        $data = [];

        $data['email'] = $email;
        $data['password'] = $password;

        $userDAO = new UserDAO();
        $userDAO->connect($data);

        return header('Location:index.php?c');
    }

    if (isset($_POST['new_submit']) && !empty($_POST['new_content'])){
        $content = strip_tags($_POST['new_content']);

        $userDAO = new UserDAO();
        if($user = $userDAO->setUser()){
            $data = [];
    
            $data['content'] = $content;
            $data['author'] = $user->getId();
    
    
            $postDAO = new PostDAO();
            $postDAO->newPost($data);
            
            return header('Location: index.php');
        }
        return header('Location: login.php');
    }
    // return header('Location: login.php?x');
}
