<?php
Class getBudgetByBudgetID
{
public $budget_id;
public $user_id;
public $budget_name;
public $amount;
public $start_date;
public $end_date;
}
function getBudgetByUserID($user_id)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budget where user_id = '{$user_id}'";
    $resultsBudget = $con->query($sql);


    if ($resultsBudget->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget->fetch_assoc()) {
        echo 'Budget Name: ' . $row["budget_name"]. ' ';
        }  
           } 
           else {         
             
            echo "You don't have any budget , you can create one. <br>";

           }
  


}

function getBudgetByBudgetID($budget_id)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budget where budget_id = '{$budget_id}'";
    $resultsBudget1 = $con->query($sql);


    if ($resultsBudget1->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget1->fetch_assoc()) {
        echo 'Budget Name: ' . $row["budget_name"]. ' ';
        }  
           } 
           else {         
             
            echo "You don't have any budget , you can create one. <br>";

           }
  


}


function createBudget($user_id,$budget_name,$amount,$start_date,$end_date)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "INSERT INTO budget (user_id, budget_name, amount, start_date, end_date)
    VALUES ($user_id,$budget_name,$amount,$start_date,$end_date);";
    $resultsBudget2 = $con->query($sql);


    echo "Budget Created. <br>";

}



function editBudget($budget_id,$budget_name,$amount,$start_date,$end_date)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "UPDATE budget
    SET budget_name = $budget_name, amount = $amount, start_date = $start_date, end_date = $end_date
    WHERE budget_id = $budget_id;";
    $resultsBudget3 = $con->query($sql);


    echo "Budget Edited. <br>";

}



function deleteBudget($budget_id)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "DELETE FROM budget
    WHERE budget_id = $budget_id;";
    $resultsBudget3 = $con->query($sql);


    echo "Budget Deleted. <br>";

}

?>