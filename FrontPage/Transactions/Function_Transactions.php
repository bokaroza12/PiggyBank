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
            echo '<script>';
            echo 'alert("Transaction created");';
            echo '</script>';
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
                echo '<br><br><b>Last Transaction amount:</b> ' . $row["amount"] . '<br><b>Transaction date:</b> ' . $row["transaction_date"] . '<br><br>';
            }
        } else {
            echo "No transaction found.";
        }
    }

    function getTransactionsByUserId($user_id) {
        global $con;

        require_once("../../includes/login.inc.php");
        require_once("../../includes/connection.php");

        $sql = "SELECT * FROM transaction WHERE user_id = $user_id order by transaction_date desc ";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo 'Transaction amount: ' . $row["amount"]. ' Transaction date: ' . $row["transaction_date"].  '';
          
              $sql2 = "SELECT * FROM transaction 
              INNER JOIN user ON transaction.user_id = user.user_id 
              INNER JOIN budget ON transaction.budget_id = budget.budget_id 
              INNER JOIN category ON transaction.category_id = category.category_id 
              WHERE user.user_id = '{$user_id}'
              AND transaction_id = {$row["transaction_id"]}";

              $results = $con->query($sql2);
          
          
              if ($results->num_rows > 0) {
                // output data of each row
                while($row2 = $results->fetch_assoc()) {
                    echo '<a style="color: red;" onclick="alert(\'Category Name : ' . $row2["category_name"]. ' - Transaction amount: ' . $row2["amount"]. ' - Budget Name: ' . $row2["budget_name"].'\')"> Click for More Info</a><br>';              }  
                   } 
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