<html>
<head>
<meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
<?php
session_start();
?>
$(document).ready(function(){
    $("#link").click(function(){
    $.ajax({url:"test.php", success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#course").click(function(){
    $.ajax({url:"course.php", success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#student").click(function(){
    $.ajax({url:"student.php", success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $(".Student").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"student_details.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $(".Course").click(function(){
        var sid = $(this).attr('code').toString();
        $.ajax({url:"course_details.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#student").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"insert_student.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#student").click(function(){
     var sid = $(this).attr('code').toString();
    $.ajax({url:"insert_student.php?sid=" + sid, success: function(result){
        $("#div1").html(result);
    }});
});
});
</script>   
</head>
<body>
<!-- <form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form> -->


<script src="jquery-3.2.1.min.js"></script>

        <?php
        require_once "dal.php";
        require_once "nav.php";
        ?>
        <link rel="stylesheet" href="style.css">

    <table>
    <tr>
    <th>
        <?php
        //מביא את מספר סך כל הרשומים
        $stmt = $pdo->query('SELECT COUNT(name) as total  FROM course');

        foreach ($stmt as $row)
        {
            echo "course Total:".$row['total']." <input type='submit' id='course' value='+' name='submit'>";
            
            //  echo "<input type='submit' id='course' value='course +' name='submit'>"."<br>"."\n".$row['total']."\n"."<br>"."\n";
        };
        ?>
    </th>
    <th>
    <?php
        $stmt = $pdo->query('SELECT COUNT(name) as total  FROM student');
        ?>  
        <?php
        foreach ($stmt as $row)
        {
            // echo "<input type='submit' id='student' value='student +' name='submit'>"."<br>"."\n".$row['total']."<br>"."\n";
            echo  "student Total:".$row['total']." <input type='submit' id='student' value='+' name='submit'>";
        };
        ?>
    </th>
    </tr>
    <tr>
    <td>
        <?php
        //מביא את כל הקורסים הנמצאים
            $stmt = $pdo->query('SELECT * FROM course');
            foreach ($stmt as $row)
            {   
                echo "Course's name:";
                echo "<a code=".$row['id']." class='Course' href='#'>".$row['name']."</a>"."<br>";
            $stmt = $pdo->query('SELECT image FROM course');
            foreach ($stmt as $row)
            {
                // echo  "<img src='./image/" . $row['image'] . "'></img>";
            };
        };
        ?>
    </td>
    <td>
        <?php
            $stmt = $pdo->query('SELECT * FROM student');
            foreach ($stmt as $row)
            {   
                echo "Student's name:";
                echo "<a code=".$row['id']." class='Student' href='#'>".$row['name']."</a>"."<br>";
                if($row['name']==$row['text']){
                    $stmt = $pdo->query('SELECT text FROM student');
            
                    foreach ($stmt as $row)
                    {
                        echo  "<img src='./upload/" . $row['text'] . "'></img>";
                    };
                };
        };
        ?>
    </td>
    </tr>
    </table>
        <?Php
    
   
        ?>
        <div id="container" class="panel-body">
        <div id="div1"></div>
        <!-- <div id="div2"></div> -->
        <!-- <div id="div3"></div> -->

</body>
</html>