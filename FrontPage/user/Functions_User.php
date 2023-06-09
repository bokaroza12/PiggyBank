<?php



class User 
{
public    $user_id;
public    $username;
public    $email;
public    $password;
public    $created_at;
}


function createUser($user_id, $username, $email, $password, $created_at) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "INSERT INTO user (user_id, username, email, password, created_at)
            VALUES ($user_id, '$username', '$email', '$password', '$created_at')";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "User created successfully. <br>";
    } else {
        echo "Error creating user" ;
    }
}

function getUserById($user_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No user found.";
    }
}

function getUserByUsername($username) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Process the data
        }
    } else {
        echo "No user found with this username.";
    }
}

function updateUser($user_id, $username, $email, $password, $created_at) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "UPDATE user SET username = '$username', email = '$email', password = '$password', created_at = '$created_at'
            WHERE user_id = $user_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "User updated successfully. <br>";
    } else {
        echo "Error updating user" ;
    }
}

function deleteUser($user_id) {
    global $con;

    require_once("../../includes/login.inc.php");
    require_once("../../includes/connection.php");

    $sql = "DELETE FROM user WHERE user_id = $user_id";

    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "User deleted successfully. <br>";
    } else {
        echo "Error deleting user" ;
    }
}
