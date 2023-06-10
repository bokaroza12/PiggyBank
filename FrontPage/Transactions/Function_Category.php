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
            echo 'Category Name: ' . $row["category_name"] '';
        }
    } else {
        echo "No category found.";
    }
}

function getAllCategories($button) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM category";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($button == 1){
      echo '<button>'. $row["category_name"].'</button>';
            }
            echo 'Category Name: ' . $row["category_name"] '';
        }
    } else {
        echo "No categories found.";
    }
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