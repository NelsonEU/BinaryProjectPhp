<?php

session_start();

# Definition des variables globales du site
define('VIEW_PATH', 'views/');

# Ecrire ici le head de toutes pages HTML
require_once(VIEW_PATH . 'header.php');

# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';

# Automatisation de l'inclusion des classes de la couche modele
function chargerClasse($classe)
{
    require_once('models/' . $classe . '.class.php');
}

spl_autoload_register('chargerClasse');

//if($_GET['tournament'] == 3){
//    $action = 'home';
//}

# Quelle action est demandée ?
switch ($action) {
    case 'tournaments':
        require_once('controllers/TournamentsController.php');
        $controller = new TournamentsController();
        break;
    case 'tournament':
        require_once('controllers/TournamentController.php');
        $controller = new TournamentController();
        break;
    case 'register':
        require_once('controllers/RegisterController.php');
        $controller = new RegisterController();
        break;
    case "login":
        require_once('controllers/LoginController.php');
        $controller = new LoginController();
        break;
    case "logout":
        unset($_SESSION['connectedUser']);
        header("Location: index.php");
        break;
    default: # Par défaut, le contrôleur de l'accueil est sélectionné
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        break;
}
# Exécution du contrôleur correspondant à l'action demandée
$controller->run();

# Ecrire ici le head de toutes pages HTML
require_once(VIEW_PATH . 'footer.php');