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
        $this->totalPoints += 3;
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

    public function getGoalAverage() {
        if ($this->totalGames > 0) {
            return $this->totalGoals / $this->totalGames; 
            }
        return 0; 
    }
}

?>