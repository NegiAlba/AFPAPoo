<?php

namespace App\src\DAO;

use App\src\models\User;


class UserDAO extends DAO
{
    /**
     * Property for connected user.
     *
     * @var array
     */
    private $user;

    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function setUser()
    {
        if (isset($_SESSION['id'])) {
            $database = "SELECT * FROM user WHERE id = '{$_SESSION['id']}' AND email = '{$_SESSION['email']}'";
            $data = $this->createQuery($database)->fetch();

            return new User($data);
        }

        return null;
    }

    public function connect($data)
    {
        $exist = "SELECT * FROM user WHERE email = '{$data['email']}'";
        $result = $this->createQuery($exist)->fetch();

        if ($result) {
            if (password_verify($data['password'], $result['password'])) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['id'] = $result['id'];
                
                return new User($result);
            }
        }

        return null;
    }

    public function disconnect()
    {
        session_destroy();

        return "Disconnected";
    }

    public function signup($data)
    {
        /*
         * ! Un bloc d'instructions relatifs à l'inscription
         * ? Vérification des infos (existence)
         * ? Vérification de la validité (sur process.php)
         * ? Insertion dans la BDD.
         */

        $existEmail = "SELECT * FROM user WHERE email = '{$data['email']}'";
        $resultEmail = $this->createQuery($existEmail)->fetch();
        $existUsername = "SELECT * FROM user WHERE username = '{$data['username']}'";
        $resultUsername = $this->createQuery($existUsername)->fetch();

        var_dump($resultEmail);
        var_dump($resultUsername);
        if ($resultEmail) {
            echo 'error 1';

            return 'Cette adresse e-mail existe déja';
        }
        if ($resultUsername) {
            echo 'error 2';

            return 'Ce pseudonyme existe déja';
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $insertUser = 'INSERT INTO user (email,password,username) VALUES (:email,:password,:username)';

        return $this->createQuery($insertUser, $data);
    }
}
