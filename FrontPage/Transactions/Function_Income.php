<?php



class Income  
{
public    $income_id;
public    $income_source;
public    $income_amount;
public    $income_date;
public    $user_id;
}

function createIncome($income_id, $user_id, $income_source, $income_amount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO income (income_id, user_id, income_source, income_amount)
            VALUES ($income_id, $user_id, '$income_source', $income_amount)";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Income created successfully. <br>";
    } else {
        echo "Error creating income";
    }
}

function getIncomeById($income_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM income WHERE income_id = $income_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo 'Income Source: ' . $row["income_source"]. ' Income Amount: ' . $row["income_amount"].  '';
        }
    } else {
        echo "No income found.";
    }
}

function getIncomeByUserId($user_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM income WHERE user_id = $user_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo 'Income Source: ' . $row["income_source"]. ' Income Amount: ' . $row["income_amount"].  '';
         }
    } else {
        echo "No incomes found for the user.";
    }
}

function updateIncome($income_id, $user_id, $income_source, $income_amount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE income SET user_id = $user_id, income_source = '$income_source', 
            income_amount = $income_amount WHERE income_id = $income_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Income updated successfully. <br>";
    } else {
        echo "Error updating income";
    }
}

function deleteIncome($income_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM income WHERE income_id = $income_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Income deleted successfully. <br>";
    } else {
        echo "Error deleting income";
    }
}