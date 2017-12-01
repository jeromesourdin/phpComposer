<?php
namespace FormationPHP;

use FormationPHP\service\UserService;

// Charger l'autoload
require __DIR__ . "/../vendor/autoload.php";

echo "je suis dans index <br/>";

// $userService = new service\UserService();
$userService = new UserService();
var_dump($userService->recupByIdentifiant("felix"));