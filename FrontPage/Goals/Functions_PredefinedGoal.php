<?php
class PredefinedGoal 
{
public    $predefined_goal_id;
public    $goal_name;
public    $goal_type_id;
public    $created_at;
}

class CustomGoals {
    // ...

    function createPredefinedGoal($predefinedGoalId, $goalName, $goalTypeId, $createdAt) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "INSERT INTO PredefinedGoal (predefined_goal_id, goal_name, goal_type_id, created_at)
                VALUES ($predefinedGoalId, '$goalName', $goalTypeId, '$createdAt')";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Predefined Goal Created. <br>";
        } else {
            echo "Error creating predefined goal";
        }
    }

    function getPredefinedGoalById($predefinedGoalId) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM PredefinedGoal WHERE predefined_goal_id = $predefinedGoalId";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Process and display the predefined goal data
            }
        } else {
            echo "No predefined goal found.";
        }
    }

    function getAllPredefinedGoals() {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM PredefinedGoal";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Process and display the predefined goal data
            }
        } else {
            echo "No predefined goals found.";
        }
    }

    function updatePredefinedGoal($predefinedGoalId, $goalName, $goalTypeId, $createdAt) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "UPDATE PredefinedGoal SET goal_name = '$goalName', goal_type_id = $goalTypeId, created_at = '$createdAt' 
                WHERE predefined_goal_id = $predefinedGoalId";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Predefined Goal has been updated. <br>";
        } else {
            echo "Error updating predefined goal";
        }
    }

    function deletePredefinedGoal($predefinedGoalId) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "DELETE FROM PredefinedGoal WHERE predefined_goal_id = $predefinedGoalId";
        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Predefined Goal Deleted. <br>";
        } else {
            echo "Error deleting predefined goal";
        }
    }

    // ...
}


?>