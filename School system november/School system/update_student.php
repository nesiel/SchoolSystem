<?php
session_start();
require "dal.php";
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
    $id = $_POST['id'];   
    $name=$_SESSION["name"];    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $c_id = $_POST['c_id'];
    $sid = $_SESSION["oldId"];
    $name = "name = '{$name}'";
    $id = intval($id);
    $phone = intval($phone);
$stmt = $pdo->query ("UPDATE student SET id = $id,  $name,  phone = $phone, email= '{$email}', c_id= $c_id WHERE id =  $sid");
header("Refresh:0; url=The_school_page.php");

}    
?>
<html>
    <head>
        <title>PHP insertion</title>
        <link href="style.css" rel="stylesheet">
        <script language="JavaScript" type="text/javascript">
        function checkDelete()
        {
        return confirm('Are you sure?');
        };
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

<script>
    
</script>
    <h2>Update student</h2>
    <form action="DELETE_student.php" method="POST" id="formid">    
        <input class="submit" name="submit" type="submit" onclick="return confirm('Are you sure?')" value="DELETE_Student">
    </form>
    <form action="update_student.php" method="POST" id="formid">
        <h2>Form</h2>
        <label>Name:</label>
        <input class="input" name="name" type="text" placeholder="<?php $name=$_SESSION["name"]; echo htmlspecialchars($name); ?>">
        <label>id:</label>
        <input class="input" name="id" type="number" value="" placeholder="<?php $id=$_SESSION["id"]; echo htmlspecialchars($id); ?>">
        <label>Email:</label>
        <input class="input" name="email" type="text" placeholder="<?php $email=$_SESSION["email"]; echo htmlspecialchars($email); ?>" >
        <label>phone:</label>
        <input class="input" name="phone" type="number"  placeholder="<?php $phone=$_SESSION["phone"]; echo htmlspecialchars($phone); ?>">
        <label>coruse:</label></br>
        <select name='c_id'>
            <option value='0' >tora</option>
            <option value='1'>mat</option>
            <option value='2'>sport</option>
        </select></br>
        <label>image:</label></br>
        Choose a file to upload: maxsize 1mb</br>
        Name file : <input type="text" name="text" />
        <input type="file" name="upfile" value=""/>
    
        <input class="submit" name="submit" type="submit" value="Insert">
    </form>
   
</body>

</html>