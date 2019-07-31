<?php


class LoginController{


    public function __construct() {

    }

    public function run(){


        if($_POST != null){
            if(isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])){
                /*
                 * ! SOLUTION TEMPORAIRE !
                 * Il faudra rajouter toutes les verifications user input
                 * * SQL Injection
                 * * Htmlentities
                 * * Format email
                 * * ETC
                 */

                //If all tests are of, let's do the rest
                $email = htmlspecialchars($_POST['emailLogin']);
                $password = htmlspecialchars($_POST['passwordLogin']);
                $user = Db::getInstance()->login($email, $password);
                //var_dump($user);
                if($user == null){
                    //User doesn't exist in DB
                    /*
                    $user = new User($email, $password);
                    Db::getInstance()->register($user);
                    */
                    $_SESSION['noUser'] = true;
                    $_SESSION['wrongUser'] = true;
                }else{
                    //User connected
                    session_start();
                    $user->setPassword(null);
                    $_SESSION['connectedUser'] = serialize($user);
                    $_SESSION['noUser'] = false;
                    $_SESSION['wrongUser'] = false;
                    header('Location: index.php?action=tournaments');
                }
            }
        }else{
            $_SESSION['noUser'] = false;
            $_SESSION['wrongUser'] = false;
        }
        # Content
        require_once(VIEW_PATH . 'login.php');
    }

}
?>