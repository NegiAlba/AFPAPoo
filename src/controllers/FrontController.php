<?php

namespace App\src\controllers;

use App\src\DAO\PostDAO;
use App\src\DAO\UserDAO;

class FrontController
{
    private $userDAO;
    private $postDAO;
    private $user;

    public function __construct()
    {
        $this->postDAO = new PostDAO();
        $this->userDAO = new UserDAO();
        $this->user = $this->userDAO->setUser();
    }

    public function home()
    {
        var_dump($_POST);
        $user = $this->user;

        if (isset($_POST['new_submit']) && !empty($_POST['new_content'])){
            $content = strip_tags($_POST['new_content']);
    
            
            if($user){
                $data = [];
        
                $data['content'] = $content;
                $data['author'] = $user->getId();
        
            }
        
                $this->postDAO->newPost($data);
                
                return header('Location: /afpapoo/');
            return header('Location: /afpapoo/public/login');
        }
        
        $posts = $this->postDAO->findAll();
        
        
        require '../templates/front/home.php';
    }
    
    public function login()
    {
        $user = $this->user;
        var_dump($_POST);
        if(isset($_POST['login_submit']) && !empty($_POST['login_email']) && !empty($_POST['login_password'])){
            $email = strip_tags($_POST['login_email']);
            $password = strip_tags($_POST['login_password']);
    
            $data = [];
    
            $data['email'] = $email;
            $data['password'] = $password;

            $result = $this->userDAO->connect($data);

            if($result){
                return header("Location:profile/{$result->getUsername()}");
            }
        }

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
    
                $this->userDAO->signup($data);
    
                return header('Location: /login');
            }
            return header('Location: /login');
        }
        require '../templates/front/login.php';
    }

    public function logout()
    {
        $this->userDAO->disconnect();

        return header('Location:/afpapoo/');
    }

    public function profile($username)
    {
        $user = $this->user;
        $posts = $this->postDAO->findByUser($username);
        
        require '../templates/front/profile.php';
    }

    public function error()
    {
        $user = $this->user;
        require '../templates/front/error.php';
    }
}