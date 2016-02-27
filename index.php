<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>

<body>

<form>

    <INPUT type="button" value="Sign Up" onClick="window.open('http://localhost/php_workspace/signup.php','_self')">
    <INPUT type="button" value="Sign In" onClick="window.open('http://localhost/php_workspace/login.php','_self')">

</form>


<?php


exit;

$array = ["one" => 1, "two" => 2];
echo json_encode($array);
print_r(json_decode('{"one":1,"two":2}'));
print "<br>" . $array["one"];
print "<br>" . "****************************" . "<br>";
$cars = array("V" => "Volvo", "B" => "BMW", "T" => "Toyota");
asort($cars);
foreach ($cars as $arr_key => $arr_value) {
    echo "<br>" . "Key=" . $arr_key . " Value =" . $arr_value;
}
exit;


?>

<!-- crud operations
 Json Manipulations -->


<!--

Node.js
NPM
 Composer
 Laravel
 -->
</body>
</html>