<?php
session_start();
    include("Controllers/GenericController.php");
    if ($_SESSION['user'] == "" || $_SESSION['user'] != "admin" ) {
      header('Location: Login.php');
    }
    include("Views/project/project.php");
    include("Views/platform/platform.php");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <?php
      include("../css/bootstrap.php")
      ?>
     <title>Admin</title>
     <link rel="stylesheet" href="css/adminStyle.css">
   </head>
   <body>
     <?php
        include("bloks/navigation.php");
        include('bloks/infopage.php')
      ?>
   </body>
 </html>
