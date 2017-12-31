<?php 

// header("Location:http://google.com");
require_once "dal.php";

$stmt = $pdo->query('SELECT * FROM course');

foreach ($stmt as $row)
{
 
        print_r ($row);
    
}
?> 
<html>
<a href="http://google.com" class="button">Go to Google</a>
<div id="container" class="panel-body">
</html>
