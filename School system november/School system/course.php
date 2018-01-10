<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<!-- <div class="maindiv"> -->
<!--HTML Form -->
 <!-- <div class="form_div"> 
<div class="title">  -->
<h2>Registration of a new course</h2>
</div>
<form action="insertCourse.php" method="post" id="formid">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>id:</label>
<input class="input" name="id" type="text" value="">
<label>description:</label>
<input class="input" name="description" type="text" value="">
<label>image:</label>
<textarea cols="25" name="image" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
<!-- </div>
</div> -->
</body>
</html>