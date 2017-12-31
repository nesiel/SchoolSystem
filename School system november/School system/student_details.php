<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<script>
$(document).ready(function(){
    $("#update").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"update_student.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#DELETE").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"DELETE_student.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
</script> 
</head>
<body>
<div id="div1"></div>
</body>
</html>
<?php
session_start();
require 'dal.php';
$sid = $_GET;
$_SESSION["oldId"] =$sid['sid'];
$stmt = $pdo->query('SELECT * FROM student where id = '. $sid['sid']);
foreach ($stmt as $row)
{   
    $id=$row['id'];
    $_SESSION["id"]= $id;        
    $name=$row['name'];
    $_SESSION["name"]= $name;    
    $phone =$row['phone']; 
    $_SESSION["phone"]= $phone;    
    $email=$row['email'];
    $_SESSION["email"]= $email;        
    $image=$row['image'];
    $course=$row['course'];
    $c_id['c_id']=$row['c_id'];
    echo "<h2>".$row['name']."</h2>"."<br>";
    // echo $id."<br>";
    echo "Name: ".$name."<br>";
    echo "Phone: ".$phone."<br>";
    echo "Email: ".$email;
    echo $image."<br>";
    // echo $course."<br>"."<br>";  
    // echo "<br>"."<br>";  
    $stmt = $pdo->query('SELECT * FROM `course` WHERE c_id = '. $c_id['c_id']);
foreach ($stmt as $row)
{ 
    echo "Course registration :". $row["name"]."<br>";
    // break;
    echo "Id Course:".$c_id['c_id']."<br>";

};
$stmt = $pdo->query('SELECT * FROM student where id = '. $sid['sid']);
foreach ($stmt as $row)
{
    echo "<a code=".$row['id']." id='update' href='update_student.php'>"."<h3>update :".$row['name']."</h3></a>"."<br>";

};};
// $stmt = $pdo->query('SELECT student.id, student.name, course.name FROM student INNER JOIN course ON student.c_id = course.c_id');
// $stmt = $pdo->query('SELECT * FROM course where id = '. $c_id['c_id']);


?>

