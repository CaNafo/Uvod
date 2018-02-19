<?php 
    require("config.php");
    if(!empty($_POST)){
             $name = $_POST['username'];
             $result = mysqli_query($conn, "SELECT * FROM users
                     WHERE User LIKE '%{$name}%' OR Pass LIKE '%{$name}%'");
        $login_ok = false;
        $Username=$_POST[username];
        $Pass= hash('ripemd160', $_POST[password]);
        while ($row = mysqli_fetch_array($result))
        {
                                 


                if(!(strcmp($Username,$row['User'])) && !(strcmp($row['Pass'],$Pass)))
             {
                  $login_ok = true;
                        break;
            }
            
        }
     
        if($login_ok){
             $_SESSION['User'] = $row['User'];
             $_SESSION['ModStat'] = $row['ModStat'];

            if(strcmp($row['User'],"Admin"))
            {
                
            $today = date("j. n. Y");   
            $today1 = date("H:i:s");  
            $user=$_SESSION['User'];
                $result = mysqli_query($conn,"DELETE FROM logs WHERE User='$user'");
          $query = " 
            INSERT INTO logs ( 
                User, 
                Time,
                Date
                ) 
                VALUES ( 
                '$user', 
                '$today1' ,
                '$today'
            ) 
        "; 
           $result = mysqli_query($conn, $query);
            }
                       

             header("Location: pocetna.php"); 
            die("Redirecting to: pocetna.php");         
        } 
        else{ 
               echo '<script>alert("Unijeli ste pogresno ime ili sifru, molimo Vas pokušajte ponovo.")</script>';
  
            } 
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uvod u programiranje zadaci</title>
  <link rel="shortcut icon" href="Slike\logo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   
  <link type="text/css" rel="stylesheet" href="stilovi.css">

  <link type="text/css" rel="stylesheet" href="loginStyle.css">


  <script src="http://code.jquery.com/jquery-latest.js"></script>


</head>
<body class="bg-dark" onload="setInterval(vrijeme,60)">
  
<div class="container-fluid">
<nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <a class="navbar-brand" href="http://www.etf.unssa.rs.ba/" target="_blank"><img src=Slike\logo2.ico height="35" width="35"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
      <h3 style="color: white; margin: 0 auto;">Uvod u programiranje</h3>
  </div>
</nav>


  <main class="container-fluid" >
  <p align=right id="Vrijeme"><strong></strong></p>

  <form class="container" accept-charset=""action="index.php" method="post">
          <div class="imgcontainer">
            <img src="Slike\avatar.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="containerL">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" style="border-radius:10px;" required> 

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" style="border-radius:10px;" required>

            <button type="submit" value="Login" style=" width:100%; border-radius:10px;" >Login</button>
             </div> 
    <button  type="button" class="guestbtn"  onclick="location.href='zadaci.php' " style="border-radius:10px;">Login as Guest</button>
    <button  type="button" class="register" onclick="location.href='register.php'" style="border-radius:10px;">Register</button>
    
        </form>



  </main>
 
 </div>   
  <script src="skripta.js"></script>
 
</body>
</html>
