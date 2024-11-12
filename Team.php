<?php

class Team {
    private $teamName ="";
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;


    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    public function finalScore($homeScore,$awayScore){
        $this->totalGames++;
        $this->totalGoals += $homeScore;

        if ($homeScore > $awayScore) {
        $this->totalPoints += 3;
        } elseif ($homeScore == $awayScore) {
        $this->totalPoints += 1;
        }
    }

    public function getGoalAverage() {
        if ($this->totalGames > 0) {
            return $this->totalGoals / $this->totalGames; 
        }
            return 0; 
        }
}

?>