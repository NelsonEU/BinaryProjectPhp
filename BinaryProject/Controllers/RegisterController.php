<?php


class RegisterController{

    public function __construct() {

    }

    public function run(){



        if($_POST != null){
            if(isset($_POST['emailRegister']) && isset($_POST['passwordRegister']) && isset($_POST['passwordRegisterBis'])){
                /*
                 * ! SOLUTION TEMPORAIRE !
                 * Il faudra rajouter toutes les verifications user input
                 * * SQL Injection
                 * * Htmlentities
                 * * Format email
                 * * ETC
                 */

                //If all tests are of, let's do the rest
                $email = htmlspecialchars($_POST['emailRegister']);
                $password = htmlspecialchars($_POST['passwordRegister']);
                $passwordLoginBis = htmlspecialchars($_POST['passwordRegisterBis']);
                $username = htmlspecialchars($_POST['usernameRegister']);

                //IS NOT EMAIL

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    //EMAIL INVALIDE
                    echo "wrong email";
                    $_SESSION['invalidEmail'] = true;
                }else{
                    $_SESSION['invalidEmail'] = false;

                }

                $user = Db::getInstance()->getUserByEmail($email);
                if($user != null) {
                    $_SESSION['invalidEmail'] = true;
                }else{
                    $_SESSION['invalidEmail'] = false;
                }

                $uppercase = preg_match('@[A-Z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);

                if(($password != $passwordLoginBis) || (!$uppercase || !$number || !$specialChars || strlen($password) < 8)) {
                    $_SESSION['invalidPassword'] = true;

                    echo "wrong pass";
                    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }else{
                    $_SESSION['invalidPassword'] = false;

                }

                if(strlen($username) > 30){
                    echo 'Username too long';
                    echo "wrong user";
                    $_SESSION['longUsername'] = true;
                }else{
                    $_SESSION['longUsername'] = false;
                }

                if($user == null && !$_SESSION['invalidEmail'] && !$_SESSION['invalidPassword'] && !$_SESSION['longUsername']){
                    //User valid
                    $user = new User($email, $password, $username);
                    Db::getInstance()->register($user);
                    $_SESSION['connectedUser'] = serialize($user);
                    header("Location: index.php");
                }
            }
        }

        # Content
        require_once(VIEW_PATH . 'register.php');
    }

}
?>