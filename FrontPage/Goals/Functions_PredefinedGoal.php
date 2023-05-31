<?php


function createPredefinedGoal($goalName, $goalTypeId, $createdAt) {
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    
    $sql = "INSERT INTO PredefinedGoal (goal_name, goal_type_id, created_at)
            VALUES ('$goalName', $goalTypeId, '$createdAt')";
    
    $resultsPredefinedGoal = $con->query($sql);

    echo "Predefined Goal Created. <br>";
}

function getPredefinedGoalByID($userID)
function getallPredefinedGoals($userID)
function updatePredefinedGoal($userID)
function deletePredefinedGoal($userID)


?>