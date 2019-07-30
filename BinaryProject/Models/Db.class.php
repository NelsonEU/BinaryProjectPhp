<?php
/**
 * Created by PhpStorm.
 * User: etiennearnaud
 * Date: 04/11/2018
 * Time: 17:12
 */

class Db
{

    private static $instance = null;
    private $_db;

    private function __construct()
    {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=binaryProjectDB;charset=UTF8', 'root', 'root');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion a la base de données: ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public function login($email, $password)
    {
        $query = 'SELECT * FROM Users WHERE email=' . $this->_db->quote($email);
        //echo $query;
        $result = $this->_db->query($query);
        $user = null;
        if ($result->rowCount() != 0) {
            $row = $result->fetch();
            //echo "ID: " . $row['user_id'];
            $user = new User($row['user_id'], $row['email'], $row['username'], $row['password'], $row['balance']);
        }
        if ($user != null && password_verify($password, $user->getPassword())) {
            return $user;
        } else {
            return null;
        }
    }

    public function register($user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $username = $user->getUsername();
        $query = 'INSERT into Users (email, password, username) VALUES (' . $this->_db->quote($email) . ', ' . $this->_db->quote($password) . ', ' . $this->_db->quote($username) . ')';
        $this->_db->prepare($query)->execute();
    }

    public function getUserByEmail($email)
    {
        $query = 'SELECT * FROM Users WHERE email=' . $this->_db->quote($email);
        $result = $this->_db->query($query);
        $user = null;
        if ($result->rowCount() != 0) {
            $row = $result->fetch();
            //var_dump($row);
            $user = new User($row['user_id'], $row['email'], $row['username'], $row['balance']);
        }
        return $user;
    }

    public function getTodaysTournaments(){
        $query = 'SELECT * FROM Tournaments WHERE starting_date > NOW() AND starting_date < NOW() + INTERVAL 1 DAY';
        $result = $this->_db->query($query);
        $tournaments = array();
        while ($row = $result->fetch()) {
            $tournament = new Tournament($row['tournament_id'], $row['bid'], $row['starting_date'], $row['ending_date'], $row['duration'], $row['state']);
            $tournaments[]  = $tournament;
        }
        return $tournaments;
    }

    public function registerTournament($userId, $tournamentId){
        $query = 'INSERT into UsersTournaments (user_id, tournament_id) VALUES (' . $this->_db->quote($userId) . ', ' . $this->_db->quote($tournamentId) . ')';
        $this->_db->prepare($query)->execute();
    }

    public function getUsersActiveTournaments($userId){
        $query = 'SELECT DISTINCT T.tournament_id, T.bid, T.starting_date, T.ending_date, T.duration, T.state FROM Tournaments T, UsersTournaments UT, Users U WHERE T.starting_date > NOW() AND T.tournament_id = UT.tournament_id AND UT.user_id = ' . $userId;
        $result = $this->_db->query($query);
        $tournaments = array();
        while ($row = $result->fetch()) {
            $tournament = new Tournament($row['tournament_id'], $row['bid'], $row['starting_date'], $row['ending_date'], $row['duration'], $row['state']);
            $tournaments[]  = $tournament;
        }
        return $tournaments;
    }
}