<?php



class Expense  
{
public    $expense_id;
public    $user_id;
public    $expense_category_id;
public    $expense_amount;
public    $expense_date;
}

function createExpense($expense_id, $user_id, $expense_category_id, $expense_amount, $expense_date) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO expense (expense_id, user_id, expense_category_id, expense_amount, expense_date)
            VALUES ($expense_id, $user_id, $expense_category_id, $expense_amount, '$expense_date')";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Expense created successfully. <br>";
    } else {
        echo "Error creating expense";
    }
}

function getExpenseById($expense_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM expense WHERE expense_id = $expense_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No expense found.";
    }
}

function getExpenseByUserId($user_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM expense WHERE user_id = $user_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No expenses found for the user.";
    }
}

function updateExpense($expense_id, $user_id, $expense_category_id, $expense_amount, $expense_date) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE expense SET user_id = $user_id, expense_category_id = $expense_category_id, 
            expense_amount = $expense_amount, expense_date = '$expense_date' WHERE expense_id = $expense_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Expense updated successfully. <br>";
    } else {
        echo "Error updating expense";
    }
}

function deleteExpense($expense_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM expense WHERE expense_id = $expense_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Expense deleted successfully. <br>";
    } else {
        echo "Error deleting expense";
    }
}

?>