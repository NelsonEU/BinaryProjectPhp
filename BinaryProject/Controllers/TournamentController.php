<?php


class TournamentController{

    public function __construct() {

    }

    public function run(){


        //Execution de code ici
        # Content
        if(isset($_SESSION['connectedUser'])){
            $index = $_GET['tournament'];
            $tournament = unserialize($_SESSION['tournaments'])[$index];

            if($tournament->getStartingDate() > date("Y-m-d H:i:s")){
                Db::getInstance()->registerTournament(unserialize($_SESSION['connectedUser'])->getUserId(), $tournament->getTournamentId());
                require_once(VIEW_PATH . 'registerSuccessful.php');
            }else{
                require_once(VIEW_PATH . 'home.php');
            }
            //ICI ON INSCRIT LE USER A UN TOURNOI

        }else{
            require_once(VIEW_PATH . 'login.php');
        }


    }

}
?>