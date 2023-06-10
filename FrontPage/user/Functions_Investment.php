<?php



class Investment  
{
public    $investment_id;
public    $user_id;
public    $investment_name;
public    $investment_amount;
public    $created_at;
}

function createInvestment($investment_id, $user_id, $investment_name, $investment_amount, $created_at) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO investment (investment_id, user_id, investment_name, investment_amount, created_at)
            VALUES ($investment_id, $user_id, '$investment_name', $investment_amount, '$created_at')";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Investment created successfully. <br>";
    } else {
        echo "Error creating investment";
    }
}

function getInvestmentById($investment_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM investment WHERE investment_id = $investment_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No investment found.";
    }
}

function getInvestmentByUserId($user_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM investment WHERE user_id = $user_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No investments found for the user.";
    }
}

function updateInvestment($investment_id, $user_id, $investment_name, $investment_amount, $created_at) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE investment SET user_id = $user_id, investment_name = '$investment_name', 
            investment_amount = $investment_amount, created_at = '$created_at' WHERE investment_id = $investment_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Investment updated successfully. <br>";
    } else {
        echo "Error updating investment";
    }
}

function deleteInvestment($investment_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM investment WHERE investment_id = $investment_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Investment deleted successfully. <br>";
    } else {
        echo "Error deleting investment";
    }
}
