<?php   
session_start();

require "dal.php";
require "nav.php";
if(isset($_POST['submit']))
{
$sid = $_SESSION["oldId"];
$sid = intval($sid); 

$stmt = $pdo->query("DELETE FROM `course` WHERE  id =  " . $sid);
}
header("Refresh:0; url=The_school_page.php");
?>