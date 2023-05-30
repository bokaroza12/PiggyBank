
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
        <a href="../main.html" class="button" target="_self">PiggyBank</a>
      </div>
      <ul>
        <li><a href="..\Accounts\Account_main.php" class="button" target="_self">Accounts</a></li>
        <li><a href="..\Budgets\Budget_main.html" class="button" target="_self">Budget</a></li>
        <li><a href="..\Transactions\Transactions_main.html" class="button" target="_self">Transactions</a></li>
        <li><a href="..\Goals\Goals_main.html" class="button" target="_self">Goals</a></li>
        <li><a href="..\Statistics\Statistics_main.html" class="button" target="_self">Statistics</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
   <ul>
  <li>  <font size="+3">
 <?php
  require_once("../../includes/login.inc.php");



  $sql = "SELECT * FROM account inner join user on account.user_id = user.user_id where user.user_id = '{$_SESSION['id']}'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "Name: " . $row["account_name"]. "   ";
      echo '<button onclick="alert(\'Account Name: ' . $row["account_name"]. ' - Balance: ' . $row["balance"]. ' - Created Date : ' .$row["created_at"]. '\')">More Info</button><br>';
    }  
         } else {
          echo "You don't have any account , you can create one. <br>";
         }

?>
         </font></li>    
</ul>
    <div class="btns">
    </div>
  </div>
</body>
</html>