<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Registration system PHP and MySQL</title> 
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
    <?Php
        $stmt = $pdo->query('SELECT image FROM  images');

        foreach ($stmt as $row)
        {
            echo  "<img src='./image/" . $row['image'] . "'></img>";
            break;
        };
        ?>
    </div>
        <ul class="nav navbar-nav">
            <li><a href="#"></a></li>
            <li><a class="navbar-brand" href="#">SchoolSystem</a></li>
            <li><a href="The_school_page.php">school</a></li>
            <li><a href="Administration.php">Administration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a>welcome:<?php echo $_SESSION["name"].",";?></a></li>
            <li class="active"><a><?php echo $_SESSION["user_type"];?></a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
  </div>
</nav>
</body>
</html>