<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<h2>Registration of a new student.</h2>

<form  action="insert_student.php" method="post" enctype="multipart/form-data" id="formid">
<h2>Form</h2>
    <label>Name:</label>
        <input class="input" name="name" type="text" value="experience">
    <label>id:</label>
        <input class="input" name="id" type="text" value="">
    <label>Email:</label>
        <input class="input" name="email" type="text" value="experience@gmail.com">
        <label>phone:</label>
        <input class="input" name="phone" type="text" value="0544404040">
    <label>image:</label>
    Choose a file to upload: maxsize 1mb</br>
    Name file : <input type="text" name="text" />
    <input type="file" name="upfile" value=""/>
    <label>coruse:</label>
        <select name='c_id'>
            <option value='0' >tora</option>
            <option value='1'>mat</option>
            <option value='2'>sport</option>
        </select></br>
        <label>image:</label>
        <select name="image">
            <option  value="man">man</option>
            <option  value="woman">woman</option>
        </select>
            <input class="submit" name="submit" type="submit" value="Insert">


</form>
</body>
</html>