<?php


class budgetperiod {
    public $budget_period_id;
    public $budget_id;
    public $period_start_date;
    public $period_end_date;
}

function getBudgetPeriodByID($budget_period_id)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budgetperiod where budget_period_id = '{$budget_period_id}'";
    $resultsBudget = $con->query($sql);


    if ($resultsBudget->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget->fetch_assoc()) {
        }  
           } 
           else {         
             

           }
  


}

function getBudgetPeriodsByBudgetID($budget_id)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "SELECT * FROM budgetperiod where budget_id = '{$budget_id}'";
    $resultsBudget1 = $con->query($sql);


    if ($resultsBudget1->num_rows > 0) {
        // output data of each row
        while($row = $resultsBudget1->fetch_assoc()) {
        }  
           } 
           else {         
             

           }
  


}


function createBudgetPeriod($budget_period_id,$budget_id,$period_start_date,$period_end_date)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "INSERT INTO `budgetperiod` (`budget_period_id`, `budget_id`, `period_start_date`, `period_end_date`)
    VALUES ($budget_period_id,$budget_id,$period_start_date,$period_end_date);";
    $resultsBudget2 = $con->query($sql);


    echo "Budget Period Created. <br>";

}



function updateBudgetPeriod($budget_period_id,$budget_id,$period_start_date,$period_end_date)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "UPDATE budgetperiod
    SET budget_period_id = $budget_period_id, budget_id = $budget_id, period_start_date = $period_start_date, period_end_date = $period_end_date
    WHERE budget_id = $budget_id;";
    $resultsBudget3 = $con->query($sql);


    echo "Budget Period has been updated. <br>";

}



function deleteBudgetPeriod($budgetID)

{
    global $con;
    
    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    $sql = "DELETE FROM budgetperiod
    WHERE budget_id = $budget_id;";
    $resultsBudget4 = $con->query($sql);


    echo "Budget Period Deleted. <br>";

}

?>