<?php
/**
 * Created by PhpStorm.
 * User: etiennearnaud
 * Date: 04/11/2018
 * Time: 17:35
 */

class Tournament
{
    private $_tournamentId;
    private $_bid;
    private $_starting_date;
    private $_ending_date;
    private $_duration;
    private $_state;

    public function __construct()
    {
        $argsNb = func_num_args();
        $args = func_get_args();

        switch ($argsNb) {
            case 6:
                $this->_tournamentId = $args[0];
                $this->_bid = $args[1];
                $this->_starting_date = $args[2];
                $this->_ending_date = $args[3];
                $this->_duration = $args[4];
                $this->_state = $args[5];
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getTournamentId()
    {
        return $this->_tournamentId;
    }

    /**
     * @param mixed $tournamentId
     */
    public function setTournamentId($tournamentId): void
    {
        $this->_tournamentId = $tournamentId;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->_bid;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid): void
    {
        $this->_bid = $bid;
    }

    /**
     * @return mixed
     */
    public function getStartingDate()
    {
        return $this->_starting_date;
    }

    /**
     * @param mixed $starting_date
     */
    public function setStartingDate($starting_date): void
    {
        $this->_starting_date = $starting_date;
    }

    /**
     * @return mixed
     */
    public function getEndingDate()
    {
        return $this->_ending_date;
    }

    /**
     * @param mixed $ending_date
     */
    public function setEndingDate($ending_date): void
    {
        $this->_ending_date = $ending_date;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->_duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->_duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->_state = $state;
    }


}