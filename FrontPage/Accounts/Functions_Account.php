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
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    require_once("../../FrontPage/Transactions/Function_Transactions.php");
    

    $sql = "SELECT * FROM account WHERE user_id = '{$userID}'";
    $resultsAcc = $con->query($sql);
    $checker  = 0 ;

    if ($resultsAcc->num_rows > 0) {
        // output data of each row
        while ($row = $resultsAcc->fetch_assoc()) {
            echo 'Name: ' . $row["account_name"] . '';
            echo'<a href="..\Transactions\Transaction_main2.php" class="button" target="_self">  Select Account</a><br>'
            ;
        }
    } else {
        echo 'There are no accounts.';
    }
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
        echo 'Name: ' . $row["account_name"]. '<br>';
        }  
           } 
           else {          
           }
  
        }



?>