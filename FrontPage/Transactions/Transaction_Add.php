
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
  <div class="center">
   <ul>
    <?php 


require_once("../../includes/login.inc.php");
require_once("../../FrontPage/user/Functions_user.php");
require_once("Function_Transactions.php");
require_once("../../FrontPage/Accounts/Functions_Account.php");
require_once("../../FrontPage/Budgets/Functions_Budget.php");
require_once("Function_Category.php");


$userID = 0;
$userID = getUserById($userID);


echo '<h2 style="font-size: larger; font-weight: bold;">Form for New Transaction</h2>';
getCategoryById(0);

global $con;
$sql_max_id = "SELECT MAX(transaction_id) AS max_id FROM transaction";
$result_max_id = $con->query($sql_max_id);
$row_max_id = $result_max_id->fetch_assoc();
$max_id = $row_max_id['max_id'];

$transaction_id = $max_id + 1;

$sql_max_id_2 = "SELECT MAX(budget_id) AS max_id FROM budget";
$result_max_id_2 = $con->query($sql_max_id_2);
$row_max_id_2 = $result_max_id_2->fetch_assoc();
$max_id_2 = $row_max_id_2['max_id'];

$budget_id = $max_id_2 + 1;
$done = 0;


if (isset($_GET['submit'])) {
    $amount = $_GET['amount'];
    $date = $_GET['date'];
    $budget = 0;
    $category_id = $_GET['category_id'];
    $done = 1 ;
    createBudget($budget_id,$userID,$budget,$amount,date("Y-m-d"),$date);
    createTransaction($transaction_id, $userID, $budget_id, $category_id, $amount, $date);
}
if ($done != 0){
getTransactionById($transaction_id);
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

  <label for="category_id">Category ID:</label>
  <input type="number" name="category_id" id="category_id" required><br>

  <input type="submit" name="submit" value="Submit">
  </form>  
  </body>
  </html>';






    ?>
</ul>
    <div class="btns">
    </div>
  </div>
</body>
</html>