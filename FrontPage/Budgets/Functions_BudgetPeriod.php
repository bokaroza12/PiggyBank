<?php

function getBudgetPeriodByID($userID)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budget where user_id = '{$userID}'";
    $resultsBudget = $con->query($sql);


    if ($resultsBudget->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget->fetch_assoc()) {
        echo 'Budget Name: ' . $row["budget_name"]. ' ';
        }  
           } 
           else {         
             
            echo "You don't have any budget periods, you can create one. <br>";

           }
  


}

function getBudgetPeriodsByBudgetID($budgetID)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budget where budget_id = '{$budgetID}'";
    $resultsBudget1 = $con->query($sql);


    if ($resultsBudget1->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget1->fetch_assoc()) {
        echo 'Budget Name: ' . $row["budget_name"]. ' ';
        }  
           } 
           else {         
             
            echo "You don't have any budget periods, you can create one. <br>";

           }
  


}


function createBudgetPeriod($value1,$value2,$value3,$value4,$value5)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "INSERT INTO budget (user_id, budget_name, amount, start_date, end_date)
    VALUES ($value1,$value2,$value3,$value4,$value5);";
    $resultsBudget2 = $con->query($sql);


    echo "Budget Period Created. <br>";

}



function updateBudgetPeriod($budgetID,$value1,$value2,$value3,$value4,$value5)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "UPDATE budget
    SET budget_name = $value1, amount = $value2, start_date = $value3, end_date = $value4
    WHERE budget_id = $budgetID;";
    $resultsBudget3 = $con->query($sql);


    echo "Budget Period has been updated. <br>";

}



function deleteBudgetPeriod($budgetID)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "DELETE FROM budget
    WHERE budget_id = $budgetID;";
    $resultsBudget3 = $con->query($sql);


    echo "Budget Period Deleted. <br>";

}

?>