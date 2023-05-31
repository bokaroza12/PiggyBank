<?php


class customgoal 
{
public    $custom_goal_id;
public    $user_id;
public    $goal_description;
public    $target_amount;
public    $created_at;
}
function createCustomGoal($userID)

// Assuming you have established a database connection

function createPredefinedGoal($goalName, $goalTypeId, $createdAt) {
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    
    $sql = "INSERT INTO PredefinedGoal (goal_name, goal_type_id, created_at)
            VALUES ('$goalName', $goalTypeId, '$createdAt')";
    
    $resultsPredefinedGoal = $con->query($sql);

    echo "Predefined Goal Created. <br>";
}


function getGoalItem($userID)
function getallGoalItem($userID)
function updateGoalItem($userID)
function deleteGoalItem($userID)


?>