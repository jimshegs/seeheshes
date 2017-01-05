<?php

$x;
$y;

function sum($x,$y) {
    $z = $x + $y;
    return $z;
}


$sum = sum(34,12) * 5;


//echo $sum;


$names = array("femi",45,"bayo","lola");
//var_dump($names);
//echo count($names);
for ($z=0;$z<count($names);$z++) {
    //echo $names[$z]."<br>";
}

//var_dump($_SERVER);


session_start();
$_SESSION['name'] = "bayo";
var_dump($_SESSION);

setcookie("test","ok");
echo $_COOKIE['test'];
var_dump($_COOKIE);

if (isset($_POST['user_name'])) {
    echo "User with name ".$_POST['user_name'];
    var_dump($_POST);
} else {
    echo "Not set";
}

?>

<html>
<body>
<form action="example.php" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="user_name" placeholder="Name">
    <input type="text" name="mat_no" placeholder="Matric No">
    <input type="submit">
</form>
</body>
</html>