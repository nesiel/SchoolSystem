<?php
require_once "dal.php";

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
?>
<?php
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
// $s_id = $_POST['s_id'];
$id = $_POST['id'];
if($name !=''||$email !=''){
//Insert Query of SQL


$stmt = $pdo->query ("INSERT INTO `course`(`name`, `description`, `image`, `id`) 
VALUES ('$name', '$image','$description','$id')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
echo "<a href=The_school_page><span class=glyphicon glyphicon-log-in></span> login</a>";

header("Refresh:0; url=The_school_page.php");

}

else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
echo "<a href=The_school_page> login</a>";

}
}
?>
