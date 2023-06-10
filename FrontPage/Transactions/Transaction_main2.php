
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

$userID = 0;
$userID = getUserById($userID);




getTransactionsByUserId($userID);






    ?>
</ul>
    <div class="btns">
    </div>
  </div>
</body>
</html>