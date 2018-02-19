<?php 
  
             require("config.php"); 
             unset($_SESSION['User']);
             header("Location: index.php"); 
             die("Redirecting to: index.php");

?>