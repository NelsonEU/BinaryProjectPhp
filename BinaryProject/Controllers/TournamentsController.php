<?php


class TournamentsController{



    public function __construct() {

    }

    public function run(){

        //Execution de code ici
        $_SESSION['tournaments'] = serialize(Db::getInstance()->getTodaysTournaments());
        $tournaments = unserialize($_SESSION['tournaments']);
        $_SESSION['tournamentsNb'] = count($tournaments);
        if(isset($_SESSION['connectedUser'])){
            $user = unserialize($_SESSION['connectedUser']);
            $activeTournaments = Db::getInstance()->getUsersActiveTournaments($user->getUserId());
            $user->setActiveContests($activeTournaments);
            $_SESSION['activeTournaments'] = serialize($activeTournaments);
        }
        # Content
        require_once(VIEW_PATH . 'tournaments.php');
    }


}
?>