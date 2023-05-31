
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
        <a href="..\main.html" class="button" target="_self">PiggyBank</a>
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
    <!-- <ul>
      <li><font size="+10">Coffee</font></li>
      <li><font size="+10">Milk</font></li>
      <li><font size="+10">Tea</font></li>
    </ul> -->
    <h3 style="color:rgb(34, 34, 102)">Expected Expenses : <input type="number"></h3>
    <h1 style="color:rgb(34, 34, 102)">Expense Categories</h1>
    </br>
    <button id="button">Food</button>
    <button id="button">Entertainment</button>
    <button id="button">Housing</button>
    <button id="button">Shopping</button>
    <button id="button">Healthcare</button>
    <button id="button">Education</button>
    <button id="button">Transportation</button>
    <button id="button">Travel</button>  

    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate" name="startDate">
    <label for="endDate">End Date:</label>
    <input type="date" id="endDate" name="endDate">
  </div>
 </body>
</html>