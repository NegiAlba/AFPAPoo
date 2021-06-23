<?php

class UserDAO extends DAO
{
    /**
     * Property for connected user.
     *
     * @var array
     */
    private $user;

    public function connect($data)
    {
        return $this->user = new User($data);
    }

    public function disconnect()
    {
    }

    public function signup($data)
    {
        /**
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
