<?php
namespace FormationPHP\dao;

use FormationPHP\model\User;

class UserDAO 
{
    private $pdo;

    public function getByIdentifiantOLD($identifiant)
    {
        $user = new User();
        $user->setPrenom("felix");
        $user->setNom("SPORTELLI");
        return $user;
//        return array ("nom" => "sportelli");
    }

    function getByIdentifiant(string $identifiant)
    {
        $sql = "SELECT u_id,u_identifiant,u_motdepasse,u_email" 
               . " FROM utilisateurs WHERE u_identifiant = :identifiant";
    
        // Récupération du "statement" (curseur qui va parcourir les résultats)
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute( ["identifiant" => $identifiant] );
    
        $user = null;
        while ( $ligne = $stmt->fetch())
        {
            $user = new User();
            $user->setIdentifiant($ligne['u_identifiant']);
            $user->setEmail($ligne['u_email']);
            $user->setId($ligne['u_id']);
            $user->setMotdepasse($ligne['u_motdepasse']);
        }
        return $user;
    }

    function __construct()
    {
        $hostDB = "127.0.0.1";
        $userDB = "formation";
        $passDB = "formation";
        $nameDB = "formation";
        $charset = "utf-8";

        // Chaine de connexion (toutes les informations dont PDO a besoin)
        $dsn = "mysql:host=$hostDB;dbname=$nameDB";
        $this->pdo = new \PDO($dsn, $userDB, $passDB);
    }

} 