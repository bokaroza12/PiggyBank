
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiggyBank</title> 
    <link rel="stylesheet" href="../../css/user.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="..\user\main.html" class="button" target="_self">PiggyBank</a>
      </div>
      <ul>
        <li><a href="..\Accounts\Account_main.php" class="button" target="_self">Accounts</a></li>
        <li><a href="..\Budgets\Budget_main.php" class="button" target="_self">Budget</a></li>
        <li><a href="..\Transactions\Transactions_main.php" class="button" target="_self">Transactions</a></li>
        <li><a href="..\Goals\Goals_main.php" class="button" target="_self">Goals</a></li>
        <li><a href="..\Statistics\Statistics_main.php" class="button" target="_self">Statistics</a></li>
      </ul>
    </div>
  </nav>
    <div class="img"></div>
  <div class="center" id="expense_cat">


    <?php
  require_once("../../includes/login.inc.php");
  require_once("../../FrontPage/Accounts/Functions_Account.php");
  require_once("../../FrontPage/Transactions/Function_Category.php");
  require_once("../../FrontPage/user/Functions_user.php");
  require_once("Functions_Budget.php");


  
  $userID = 0;
  $userID = getUserById($userID);

  echo '<h2 style="font-size: larger; font-weight: bold;">Form for Edit Budget</h2>';

  getBudgetByUserID($userID);



  if (isset($_GET['submit'])) {
    $amount = $_GET['amount'];
    $date = $_GET['date'];
    $budget_id = $_GET['budget_id'];
    editBudget($budget_id, $amount, date("Y-m-d"), $date);
}



  echo '<html>
  <head>
  </head>
  <body>
  <form method="GET">
  <label for="amount">Amount:</label>
  <input type="number" name="amount" id="amount" required><br>

  <label for="date">Date:</label>
  <input type="date" name="date" id="date" required><br>

  <label for="budget_id">Budget ID:</label>
  <input type="number" name="budget_id" id="budget_id" required><br>

  <input type="submit" name="submit" value="Submit">
  </form>  
  </body>
  </html>'



  


?>

  </div>
 </body>
</html>