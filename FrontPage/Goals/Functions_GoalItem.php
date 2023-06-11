<?php

class goalitem 
{
public    $goal_item_id;
public    $predefined_goal_id;
public    $goal_description;
public    $target_amount;
}


function createGoalItem($goalItemId, $predefinedGoalId, $goalDescription, $targetAmount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO goalitem (goal_item_id, predefined_goal_id, goal_description, target_amount)
            VALUES ($goalItemId, $predefinedGoalId, '$goalDescription', $targetAmount)";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo '<script>alert("Goal Item.");</script>';    
    } else {
        echo "Error creating goal item";
    }
}

function getGoalItemById($goalItemId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM goalitem WHERE goal_item_id = $goalItemId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Goal Name: ' . $row["goal_description"]. ' - Goal Amount: ' . $row["target_amount"].  '<br>';
        }
    } else {
        echo "No goal item found.";
    }
}

function getAllGoalItemByPredefinedId($predefinedGoalId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM goalitem WHERE predefined_goal_id = $predefinedGoalId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Goal Name: ' . $row["goal_description"]. ' Goal Amount: ' . $row["target_amount"].  '';
}
    } else {
        echo "No goal items found for the predefined goal.";
    }
}

function updateGoalItem($goalItemId, $predefinedGoalId, $goalDescription, $targetAmount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE goalitem SET predefined_goal_id = $predefinedGoalId, goal_description = '$goalDescription', target_amount = $targetAmount
            WHERE goal_item_id = $goalItemId";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Goal Item has been updated. <br>";
    } else {
        echo "Error updating goal item";
    }
}

function deleteGoalItem($goalItemId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM goalitem WHERE goal_item_id = $goalItemId";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Goal Item Deleted. <br>";
    } else {
        echo "Error deleting goal item";
    }
}

?>