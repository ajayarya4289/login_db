<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>

<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div align="center">
        User Name:<input type="text" name="user_name">
        <br>
        Password: <input type="text" name="password">
        <br>
        <input type="submit" value="Submit">
    </div>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: ajay
 * Date: 21/2/16
 * Time: 8:08 PM
 */

if (isset($_REQUEST['user_name']) && isset($_REQUEST['password'])) {

    $user_name = $_REQUEST['user_name'];
    $password = $_REQUEST['password'];
    $gender = "Male";

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "db");

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database if it does not exists
    $sql = "CREATE DATABASE IF NOT EXISTS " . DB_DATABASE;
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }


    /* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $sql = "INSERT INTO login_details (user_name, password, gender) VALUES ('" . $user_name . "','" . $password . "','" . $gender . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        window.open('http://localhost/php_workspace/index.php','_self');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    mysqli_close($link);

}

?>
</body>
</html>
