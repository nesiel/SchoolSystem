<?php

if (isset($_POST['text'], $_FILES['upfile']))
{
  $allowed = array('image/png', 'image/jpeg', 'image/gif');
//   $maxsize = 1 * 1024 * 1024; // 1mb

//   echo 'File ', $_FILES['upfile']['name'], ' was uploaded <br/>';
//   if( $_FILES['upfile']['error'] > 0) 
//     die("Error #".$_FILES['upfile']['error']." occured");


//   echo 'It\'s type is: ', $_FILES['upfile']['type'], '<br/>';
//   if( !in_array($_FILES['upfile']['type'], $allowed) ) 
//     die('This type is not allowed');
  
//   $size_in_mb = round( $_FILES['upfile']['size']/1024/1024 ,3);

//   echo 'It\'s size is: ', $size_in_mb , 'mb <br/>';
//   if($_FILES['upfile']['size'] > $maxsize) 
//     die("The file is bigger then allowed");
  

//   echo 'The file passed all validations. <br/> 
//       It has a proper size, it is an image and it had no errors. <br/>';
  
//   echo 'Copying the file as "uploaded.png"';
  move_uploaded_file($_FILES['upfile']['tmp_name'], './upload/'. $_POST['name']);
}
require_once "dal.php";
session_start();

$host = '127.0.0.1';
$db   = 'system_courses1';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

if(isset($_POST['submit']))
{
            $id = $_POST['id'];    
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $image = $_POST['image']; 
            $c_id = $_POST['c_id'];
            $_SESSION["c_id"] = $_POST['c_id'];
            $text = $_POST['name'];

            
    if($name !=''||$email !=''){
        // foreach($_POST['course'] as $kors)
        // {
        //     $_POST['course']=$kors; 
            $sid = $_GET;
            
            $sid = intval($sid);     
            $_SESSION["oldId"] =$sid['sid'];  
        // };    
        $stmt = $pdo->query ("INSERT INTO `student`(`id`,`name`, `email`, `phone`,`image`,`c_id`, `text`) 
        VALUES ('$id','$name', '$email', '$phone', '$image', '$c_id', '$text')");
        echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        echo "<a href=The_school_page><span class=glyphicon glyphicon-log-in></span> login</a>";
        header("Refresh:0; url=The_school_page.php");
        // $stmt = $pdo->query ("INSERT INTO `students_and courses`( `s_id`) VALUES ($sid)");
        }
        else
        {
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        echo "<a href=The_school_page> login</a>";
        };
        
};
?>
