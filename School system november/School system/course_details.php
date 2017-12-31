<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<script>
$(document).ready(function(){
    $("#updateCourse").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"update_course.php?sid=" + $sid, success: function(result){
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
// var_dump($_GET);
$sid = $_GET['sid'];
$_SESSION["oldId"] =$sid;
$stmt = $pdo->query('SELECT * FROM course where id = '. $sid);
foreach ($stmt as $row)
{   
    $id=$row['id'];
    $name=$row['name'];
    $description=$row['description'];
    $image=$row['image'];
    echo "<h2>".$row['name']."</h2>"."<br>";
    echo $id."<br>";
    echo $name."<br>";
    echo $image."<br>";
    echo $description."<br>";
    echo "<a code=".$row['id']." id='updateCourse' href='update_course.php'>"."edit:".$row['name']."</a>"."<br>";
    
};

?>

<!-- <html>
<head>
<title>PHP insertion</title>
<link href="style.css" rel="stylesheet">
</head>
<body> -->
<!-- <div class="maindiv"> -->
<!--HTML Form -->
 <!-- <div class="form_div"> 
<div class="title">  -->
<!-- <h2>course_details</h2>
</div>
<form action="insert_student.php" method="post" id="formid"> -->
<!-- Method can be set as POST for hiding values in URL-->
<!-- <h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>phone:</label>
<input class="input" name="phone" type="text" value="">
<label>image:</label>
<textarea cols="25" name="image" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form> -->
<!-- </div>
</div> -->
<!-- </body>
</html> -->