<?php
/**
 * Created by PhpStorm.
 * User: etiennearnaud
 * Date: 04/11/2018
 * Time: 17:35
 */

class User
{
    private $_userId;
    private $_username;
    private $_email;
    private $_password;
    private $_balance;
    private $_activeContests;

    public function __construct()
    {
        $argsNb = func_num_args();
        $args = func_get_args();

        $this->_activeContests = array();

        switch($argsNb){
            //Put User In Database
            case 2:
                $this->_email = $args[0];
                $this->_password = password_hash($args[1],PASSWORD_BCRYPT);
                break;
            case 3:
                $this->_email = $args[0];
                $this->_password = password_hash($args[1],PASSWORD_BCRYPT);
                $this->_username = $args[2];
                break;
            //Get User From Database
            case 4:
                $this->_userId = $args[0];
                $this->_email = $args[1];
                $this->_username = $args[2];
                $this->_balance = $args[3];
                break;
            case 5:
                $this->_userId = $args[0];
                $this->_email = $args[1];
                $this->_username = $args[2];
                $this->_password = $args[3];
                $this->_balance = $args[4];
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getActiveContests()
    {
        return $this->_activeContests;
    }

    /**
     * @param mixed $activeContests
     */
    public function setActiveContests($activeContests): void
    {
        $this->_activeContests = $activeContests;
    }



    /**
     *
     */
    public function __toString()
    {
        return $this->_userId + " - " + $this->_username + ":   " + $this->_balance;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->_firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->_balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->_balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $firstname
     */
    public function setUsername($username): void
    {
        $this->_firstname = $username;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->_lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        echo "debut email";
        $this->_email = $email;
        echo "fin email";
    }

    /**
     * @return bool|string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param bool|string $password
     */
    public function setPassword($password): void
    {
        echo "Debut";
        $this->_password = password_hash($password,PASSWORD_BCRYPT);
        echo "fin";
    }



}