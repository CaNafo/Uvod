<?php 
    require("config.php");
    if(!empty($_POST)){
             $name = $_POST['username'];
             $result = mysqli_query($conn, "SELECT * FROM users
                     WHERE User LIKE '%{$name}%' OR Pass LIKE '%{$name}%' OR ModStat LIKE '%{$name}%'");
        $login_ok = true;
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $conf= $_POST[Confirm];
        while ($row = mysqli_fetch_array($result))
        {
                if(!(strcmp($user,$row['User'])))
                {
                  echo '<script>alert("Ime je zauzeto, molimo vas da pokusate ponovo.")</script>';
                  $login_ok = false;
                        break;
            }
            
        }
        if(!(strcmp($pass,$conf)) && $login_ok )
        {
                        $pass= hash('ripemd160', $conf);

            $query = " 
            INSERT INTO users ( 
                User, 
                ModStat,
                Pass
                ) 
                VALUES ( 
                '$user', 
                '',
                '$pass' 
            ) 
        "; 
           $result = mysqli_query($conn, $query);
           if($result){
               header("Location: pocetna.php");       
           }
        }
           else if($login_ok){ 
               echo '<script>alert("Unijeli ste pogresnu sifru, molimo vas da pokusate ponovo.")</script>';
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
      <h3 style="color: white; margin: 0 auto;">Uvod u programiranje - Registracija</h3>
  </div>
</nav>


  <main class="container-fluid" >
  <p align=right id="Vrijeme"></p>

        <form action="register.php" class="container" method="post">
          <div class="imgcontainer">
            <img src="Slike\AvatarReg.png" alt="Avatar" class="avatar">
          </div>

          <div class="containerL">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" style="border-radius:10px;" required> 

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" style="border-radius:10px;" required>
            
            <label for="password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="Confirm" style="border-radius:10px;" required>
            <button type="submit" value="Login" style=" width:100%; border-radius: 10px;">Sign up</button>
             </div>   
            </form>

<div class="container" style="background-color:#f1f1f1">
    <button  style="border-radius:10px;" type="button" class="register " onclick="location.href='index.php'">Cancel</button>
         </div>

  </main>
 
 </div>   
  <script src="skripta.js"></script>
 
</body>
</html>
