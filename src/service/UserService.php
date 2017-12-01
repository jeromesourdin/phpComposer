<?php
namespace FormationPHP\service;

use FormationPHP\dao\UserDAO;

class UserService 
{

    function recupByIdentifiant(string $identifiant)
    {
        // Accéder à la DAO
        $userDAO = new UserDAO();
        $user = $userDAO->getByIdentifiant($identifiant);
        return $user;
    }
}