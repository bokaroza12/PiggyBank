<?php


class Account {
    public $userID;
    public $accountID;
    public $user_id;
    public $account_name;
    public $balance;
    public $created_at;
}
function getAccountByUserID($userID)

{
    $userID = $_SESSION['id'];
    return $userID;
}

function getAccountByID($accountID)

{
 
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM account where account_id = '{$accountID}'";
    $resultsAcc = $con->query($sql);


    if ($resultsAcc->num_rows > 0) {
        // output data of each row
        while($row = $resultsAcc->fetch_assoc()) {
        echo 'Name: ' . $row["account_name"]. ' ';
        }  
           } 
           else {          
           }
  
        }



?>