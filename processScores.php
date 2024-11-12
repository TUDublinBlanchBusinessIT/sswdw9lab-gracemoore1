<?php

include("Team.php");

$teamName = $_GET{'teamName'};
$ht1 = $_GET['home1'];
$at1 = $_GET['away1'];
$ht2 = $_GET['home2'];
$at2 = $_GET['away2'];
$ht3 = $_GET['home3'];
$at3 = $_GET['away3']0;

if (empty($teamName)) {
    echo "Error: team name is required.";
    exit;
}

$homeTeam = new Team($teamName);

$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Goal average for {$teamName}: " . $homeTeam->getGoalAverage();



?>