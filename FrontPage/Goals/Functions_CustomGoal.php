<?php


class customgoal 
{
public    $custom_goal_id;
public    $user_id;
public    $goal_description;
public    $target_amount;
public    $created_at;
}

function createCustomGoal($custom_goal_id, $user_id, $goal_description, $target_amount, $created_at) {
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    
    $sql = "INSERT INTO customgoal (custom_goal_id, user_id, goal_description, target_amount, created_at)
            VALUES ($custom_goal_id, $user_id, '$goal_description', $target_amount, '$created_at')";
    
    $result = $con->query($sql);
    
    if ($result === TRUE) {
        echo "Custom Goal Created. <br>";
    } else {
        echo "Error creating custom goal: " . $con->error;
    }
}

function getCustomGoalById($customGoalId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM customgoals WHERE custom_goal_id = $customGoalId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $customGoal = $result->fetch_assoc();
        echo 'Custom Goal Name: ' . $row["goal_description"]. ' Custom Goal Amount: ' . $row["target_amount"].  '';
    } else {
        return null; // Custom goal not found
    }
}

function getCustomGoalByUserId($userId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM customgoals WHERE user_id = $userId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $customGoals = array();
        while ($row = $result->fetch_assoc()) {
            $customGoals[] = $row;
        }
        echo 'Custom Goal Name: ' . $row["goal_description"]. ' Custom Goal Amount: ' . $row["target_amount"].  '';
    } else {
        return array(); // No custom goals found for the user
    }
}

function updateCustomGoal($customGoalId, $userId, $goalDescription, $targetAmount, $createdAt) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE customgoals SET user_id = $userId, goal_description = '$goalDescription', target_amount = $targetAmount, created_at = '$createdAt' WHERE custom_goal_id = $customGoalId";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Custom Goal Updated. <br>";
    } else {
        echo "Error updating custom goal" ;
    }
}

function deleteCustomGoal($customGoalId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM customgoals WHERE custom_goal_id = $customGoalId";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Custom Goal Deleted. <br>";
    } else {
        echo "Error deleting custom goal " ;
    }
}



?>