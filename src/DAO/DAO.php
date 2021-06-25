<?php

namespace App\src\DAO;

use PDO;
use PDOException;

abstract class DAO
{
    //! DB connection
    protected $db;

    public function __construct()
    {
        $this->getDb();
    }

    // Fonction de connexion à la BDD via la PDO.
    public function setDb()
    {
        try {
            $this->db = new PDO(DB_HOST, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $this->db;
        } catch (PDOException $e) {
            echo "Erreur : {$e->getMessage()}";
        }
    }

    public function getDb()
    {
        if (null === $this->db) {
            return $this->setDb();
        }

        return $this->db;
    }

    public function createQuery($sql, $params = null)
    {
        $query = $this->db->prepare($sql);
        $query->execute($params);

        return $query;
    }
}
