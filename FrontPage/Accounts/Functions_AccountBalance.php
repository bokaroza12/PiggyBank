<?php


class AccountBalance {
    public $account_balance_id;
    public $account_id;
    public $balance_date;
    public $balance_amount;
}


function createAccountBalance($accountBalanceId, $accountId, $balanceDate, $balanceAmount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO AccountBalance (account_balance_id, account_id, balance_date, balance_amount)
            VALUES ($accountBalanceId, $accountId, '$balanceDate', $balanceAmount)";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Account Balance Created. <br>";
    } else {
        echo "Error creating account balance";
    }
}

function getAccountBalanceById($accountBalanceId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM AccountBalance WHERE account_balance_id = $accountBalanceId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Process and display the account balance data
        }
    } else {
        echo "No account balance found.";
    }
}

function getAccountBalanceByAccountId($accountId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM AccountBalance WHERE account_id = $accountId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Process and display the account balance data
        }
    } else {
        echo "No account balance found for the account ID.";
    }
}

function updateAccountBalance($accountBalanceId, $accountId, $balanceDate, $balanceAmount) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE AccountBalance SET account_id = $accountId, balance_date = '$balanceDate', balance_amount = $balanceAmount
            WHERE account_balance_id = $accountBalanceId";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Account Balance has been updated. <br>";
    } else {
        echo "Error updating account balance";
    }
}

function deleteAccountBalance($accountBalanceId) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM AccountBalance WHERE account_balance_id = $accountBalanceId";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Account Balance Deleted. <br>";
    } else {
        echo "Error deleting account balance";
    }
}





?>