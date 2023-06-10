<?php



class Category 
{
public    $category_id;
public    $category_name;
}



function createCategory($category_id, $category_name) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO category (category_id, category_name)
            VALUES ($category_id, '$category_name')";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Category created successfully. <br>";
    } else {
        echo "Error creating category" ;
    }
}

function getCategoryById($category_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM category WHERE category_id = $category_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo 'Category Name: ' . $row["category_name"]. '';
        }
    } else {
        echo "No category found.";
    }
}

function getAllCategories($button) {
    global $con;
    $table = [];
    $userID = 0;
    $userID = getAccountByUserID($userID); // Make sure to pass the correct user ID value

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");
    require_once("../../FrontPage/Accounts/Functions_Account.php");

    $sql = "SELECT * FROM category";
    $result = $con->query($sql);

    $sql2 = "SELECT MAX(budget_id) AS budget_id FROM budget";
    $result2 = $con->query($sql2);
    $row2 = $result2->fetch_assoc();
    $maxBudgetId = $row2['budget_id'];
    $nextBudgetId = $maxBudgetId + 1;

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($button == 1) {
                $table[] = $row["category_name"];
                echo '<font size="+1">Category Name: ' . $row["category_name"] . '</font>';           
             } else {
                echo '<font size="+2">Category Name: ' . $row["category_name"] . '</font>';
                $table[] = $row["category_name"];
            }
        }
    } else {
        echo "No categories found.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Get the form data
        if (isset($_GET["category"]) && isset($_GET["amount"]) && isset($_GET["name"])) {
            $selectedCategory = $_GET["category"];
            $expenseAmount = $_GET["amount"];
            $name = $_GET["name"];
            $endDate = isset($_GET["end_date"]) ? $_GET["end_date"] : '';

            // Insert data into database
            $insertSql = "INSERT INTO `budget` (`budget_id`, `user_id`, `budget_name`, `amount`, `start_date`, `end_date`)
                          VALUES ('$nextBudgetId','$userID', '$name', '$expenseAmount', CURDATE(), '$endDate')";

            if ($con->query($insertSql) === TRUE) {
                echo '<script>alert("Data saved successfully!");</script>';
            } else {
                echo "Error: " . $insertSql . "<br>" . $con->error;
            }
        } else {
            echo '<br><h2>Please provide category, amount, and name values.</h2>';

        }
    }

    echo '
        <form method="get">
            <h3 style="color:rgb(34, 34, 102)">Category:</h3>
            <select name="category">';

    foreach ($table as $category) {
        echo '<option value="' . $category . '">' . $category . '</option>';
    }

    echo '</select><br>
            <h3 style="color:rgb(34, 34, 102)">Name:</h3>
            <input type="text" name="name" id="name"><br>
            <h3 style="color:rgb(34, 34, 102)">Expected Expenses:</h3>
            <input type="number" name="amount" id="amount"><br>
            <h3 style="color:rgb(34, 34, 102)">End Date:</h3>
            <input type="date" name="end_date" id="end_date"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    ';
}






function updateCategory($category_id, $category_name) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE category SET category_name = '$category_name' WHERE category_id = $category_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Category updated successfully. <br>";
    } else {
        echo "Error updating category" ;
    }
}

function deleteCategory($category_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM category WHERE category_id = $category_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Category deleted successfully. <br>";
    } else {
        echo "Error deleting category" ;
    }
}
    ?>
 