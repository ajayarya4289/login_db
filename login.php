<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div align="center">
        User Name: <input type="text" name="user_name">
        <br>
        Password: <input type="text" name="password">
        <br>
        <input type="submit">
    </div>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: ajay
 * Date: 20/2/16
 * Time: 11:20 PM
 */
if ($_SERVER['REQUEST_METHOD'] = "POST") {

    if (isset($_REQUEST['user_name']) && isset($_REQUEST['password'])) {
        $user_name = $_REQUEST['user_name'];
        $password = $_REQUEST['password'];
        /*elseif ( isset($_COOKIE['user']) ) {
            $user = $_COOKIE['user'];
        }*/

        if (empty($user_name) && empty($password)) {
            echo "User Name & Password is Empty";
        } else if (empty($user_name)) {
            echo "User Name is Empty";
        } else if (empty($password)) {
            echo "Password is Empty";
        } else {
            echo "User Name is: " . $user_name . " <br>Password is: " . $password;
        }
    }
}

?>

</body>

</html>