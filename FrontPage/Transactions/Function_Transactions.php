<?php



class Transaction 
{
public    $transaction_id;
public    $user_id;
public    $budget_id;
public    $category_id;
public    $amount;
public    $transaction_date;
}



    function createTransaction($transaction_id, $user_id, $budget_id, $category_id, $amount, $transaction_date) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "INSERT INTO transaction (transaction_id, user_id, budget_id, category_id, amount, transaction_date)
                VALUES ($transaction_id, $user_id, $budget_id, $category_id, $amount, '$transaction_date')";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Transaction created successfully. <br>";
        } else {
            echo "Error creating transaction" ;
        }
    }

    function getTransactionById($transaction_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM transaction WHERE transaction_id = $transaction_id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo 'Transaction amount: ' . $row["amount"]. ' Transaction date: ' . $row["transaction_date"].  '';
            }
        } else {
            echo "No transaction found.";
        }
    }

    function getTransactionsByUserId($user_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM transaction WHERE user_id = $user_id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo '<font size="+2">Transaction amount: ' . $row["amount"]. ' Transaction date: ' . $row["transaction_date"].  '</font><br>';
            }
        } else {
            echo "No transactions found for this user.";
        }
    }

    function updateTransaction($transaction_id, $user_id, $budget_id, $category_id, $amount, $transaction_date) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "UPDATE transaction SET user_id = $user_id, budget_id = $budget_id, category_id = $category_id, 
                amount = $amount, transaction_date = '$transaction_date' WHERE transaction_id = $transaction_id";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Transaction updated successfully. <br>";
        } else {
            echo "Error updating transaction" ;
        }
    }

    function deleteTransaction($transaction_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "DELETE FROM transaction WHERE transaction_id = $transaction_id";

        $result = $con->query($sql);

        if ($result === TRUE) {
            echo "Transaction deleted successfully. <br>";
        } else {
            echo "Error deleting transaction" ;
        }
    }



    ?>