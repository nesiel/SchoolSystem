<?php
session_start();
require "dal.php";
if(isset($_POST['submit']))
{ // לשנות את המשתנים לאלו של טבלת הקורסים
    $name = $_POST['name'];
    $description = $_POST['description'];    
    $name = "name = '{$name}'";
    $description = "description = '{$description}'";
    $sid = $_SESSION["oldId"];     
    $sid = intval($sid); 
    $stmt = $pdo->query ("UPDATE course SET $name ,  $description   WHERE id = $sid");
    
} 

?>
<html>
    <head>
        <title>PHP insertion</title>
        <link href="style.css" rel="stylesheet">
    </head>

<body>
    <h2>Update Course</h2>
    <form action="DELETE_coruse.php" method="POST" id="formid">    
        <input class="submit" name="submit" type="submit" value="DELETE_Student">
    </form>
    <form action="update_course.php" method="POST" id="formid">
        <h2>Form</h2>
        <label>Name:</label>
        <input class="input" name="name" type="text" value="">
        <label>description:</label>
        <textarea name="description" rows="4" cols="50"></textarea>
        </br> </br>
        <input class="submit" name="submit" type="submit" value="Insert">
    </form>
</body>
</html>