<?php



class Savings 
{
public    $savings_id;
public    $user_id;
public    $savings_name;
public    $savings_amount;
public    $savings_date;
}



function createSavings($savings_id, $user_id, $savings_name, $savings_amount, $savings_date) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "INSERT INTO savings (savings_id, user_id, savings_name, savings_amount, savings_date)
                VALUES ($savings_id, $user_id, '$savings_name', $savings_amount, '$savings_date')";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Savings created successfully. <br>";
        } else {
            echo "Error creating savings.";
        }
    }

function getSavingsById($savings_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM savings WHERE savings_id = $savings_id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
         echo 'Savings Name : ' . $row["savings_name"]. ' Savings Amount: ' . $row["savings_amount"].  ' Savings Date: ' . $row["savings_date"].  '';

            }
        } else {
            echo "No savings found.";
        }
    }

function getSavingsByUserId($user_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM savings WHERE user_id = $user_id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo 'Savings Name : ' . $row["savings_name"]. ' Savings Amount: ' . $row["savings_amount"].  ' Savings Date: ' . $row["savings_date"].  '';
            }
        } else {
            echo "No savings found for this user.";
        }
    }

function updateSavings($savings_id, $user_id, $savings_name, $savings_amount, $savings_date) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "UPDATE savings SET user_id = $user_id, savings_name = '$savings_name', savings_amount = $savings_amount, savings_date = '$savings_date'
                WHERE savings_id = $savings_id";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Savings updated successfully. <br>";
        } else {
            echo "Error updating savings.";
        }
    }

function deleteSavings($savings_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "DELETE FROM savings WHERE savings_id = $savings_id";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Savings deleted successfully. <br>";
        } else {
            echo "Error deleting savings.";
        }
    }



    ?>