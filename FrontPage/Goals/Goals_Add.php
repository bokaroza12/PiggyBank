
<!DOCTYPE html>

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
require_once("Functions_PredefinedGoal.php");
require_once("Functions_GoalItem.php");
require_once("Functions_GoalType.php");

$userID = 0;
$userID = getUserById($userID);



global $con;
$sql_max_id = "SELECT MAX(predefined_goal_id) AS max_id FROM predefinedgoal";
$result_max_id = $con->query($sql_max_id);
$row_max_id = $result_max_id->fetch_assoc();
$max_id = $row_max_id['max_id'];

$predefined_goal_id = $max_id + 1;


$sql_max_id_2 = "SELECT MAX(goal_item_id) AS max_id FROM goalitem";
$result_max_id_2 = $con->query($sql_max_id_2);
$row_max_id_2 = $result_max_id_2->fetch_assoc();
$max_id_2 = $row_max_id_2['max_id'];

$goal_item_id = $max_id_2 + 1;


$sql_max_id_3 = "SELECT MAX(goal_type_id) AS max_id FROM goaltype";
$result_max_id_3 = $con->query($sql_max_id_3);
$row_max_id_3 = $result_max_id_3->fetch_assoc();
$max_id_3 = $row_max_id_3['max_id'];

$goal_type_id = $max_id_3 + 1;


$done = 0;


if (isset($_GET['submit'])) {
    $amount = $_GET['amount'];
    $date = $_GET['date'];
    $targetAmount = $_GET['target_amount'];
    $done = 1 ;
    createGoalType($goal_type_id, 'New type');
    createPredefinedGoal($predefined_goal_id, 'New Goal', $goal_type_id, $date);
    createGoalItem($goal_item_id, $predefined_goal_id, 'New Goal', $targetAmount);
}
if ($done != 0){
    getPredefinedGoalById($predefined_goal_id);
    getGoalItemById($goal_item_id);
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

  <label for="target_amount">Target Amount:</label>
  <input type="number" name="target_amount" id="target_amount" required><br>

  <label for="goalTypeId">Goal Item ID:</label>
  <input type="number" name="goalTypeId" id="goalTypeId" required><br>


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