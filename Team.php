<?php

class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;


    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    public function finalScore($homeScore,$awayScore){
        $this->totalGames += 1;
        $this->totalGoals += $homeScore;

        if ($homeScore > $awayScore) {
        $this->totalPoints += 2;
        } elseif ($homeScore == $awayScore) {
        $this->totalPoints += 1;
        }
    }

    public function getTotalPoints(){
    return $this->totalPoints;
    }

    public function getTotalGames(){
        return $this->totalGames;
    }

    public function getTotalGoals(){
        return $this->totalGoals;
    }
}

?>