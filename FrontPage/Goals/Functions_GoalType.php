<?php

class CustomGoal 
{
public    $goal_type_id;
public    $type_name;
}



    function createGoalType($goalTypeId, $typeName) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "INSERT INTO goaltype (goal_type_id, type_name)
                VALUES ($goalTypeId, '$typeName')";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo '<script>alert("Goal Created.");</script>';
                } else {
            echo "Error creating goal type";
        }
    }

    function getGoalTypeId($goalTypeId) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM goaltype WHERE goal_type_id = $goalTypeId";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo 'Goal Type Name: ' . $row["type_name"] . '';           
            }
        } else {
            echo "No goal type found.";
        }
    }

    function getAllGoalTypes() {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM goaltype";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo 'Goal Type Name: ' . $row["type_name"] . '';           
             }
        } else {
            echo "No goal types found.";
        }
    }

    function updateGoalType($goalTypeId, $typeName) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "UPDATE goaltype SET type_name = '$typeName' WHERE goal_type_id = $goalTypeId";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Goal Type has been updated. <br>";
        } else {
            echo "Error updating goal type";
        }
    }

    function deleteGoalType($goalTypeId) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "DELETE FROM goaltype WHERE goal_type_id = $goalTypeId";
        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Goal Type Deleted. <br>";
        } else {
            echo "Error deleting goal type";
        }
    }




?>