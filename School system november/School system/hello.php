<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
</html>
<?php
require_once "dal.php";
session_start();

$_SESSION["name"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$stmt = $pdo->query('SELECT * FROM users');


foreach ($stmt as $row)
{
    if($row["username"] === $_POST["username"]&& $row["password"] === $_POST["password"])
    {
        $_SESSION["user_type"] = $row["user_type"];
        require_once "nav.php";
        break;
    }
 else{echo "<h1>Your details are incorrect Please try again</h1>";
    echo "<a href=index.php><span class=glyphicon glyphicon-log-in></span> login</a>";}
    break;
}



?>

