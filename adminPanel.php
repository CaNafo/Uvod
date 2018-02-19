<?php

    require("config.php");
    if(empty($_SESSION['User'])) 
    {
       
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
    $name;
    $today = date("j. n. Y");   

//$result = mysqli_query($conn, "SELECT * FROM logs
      //               WHERE User LIKE '%{$name}%' OR Time LIKE '%{$name}%' OR Date LIKE '%{$name}%'");
   $result1 = mysqli_query($conn, "SELECT User, Time, Date FROM logs ORDER BY Id DESC");
   
   $name = $_POST['DEL'];
             $result = mysqli_query($conn, "SELECT * FROM users
                     WHERE Id LIKE '%{$name}%'");
    while ($row = mysqli_fetch_array($result))
        {
                if(!(strcmp($name,$row['Id'])))
                {
                  if(strcmp($row['ModStat'],'A')){
                                        echo '<script>alert("Uspješno ste postavili novog administratora!")</script>';

                       $query = "UPDATE users SET ModStat='A' WHERE id=$name"; 
                $result = mysqli_query($conn, $query);

                  }
                  else
                  {
            echo '<script>alert("Uspješno ste uklonili administratora!")</script>';

            $query = "UPDATE users SET ModStat='' WHERE id=$name"; 
             $result = mysqli_query($conn, $query);
             
                  }
                  break;
                }
                              

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uvod u programiranje</title>
  <link rel="shortcut icon" href="Slike\logo.ico"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="skripta.js"></script>
  <link type="text/css" rel="stylesheet" href="stilovi.css">
  <style>
      table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
  </style>

</head>
<body class="bg-dark" onload="logovi()">
  
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <a class="navbar-brand" href="http://www.etf.unssa.rs.ba/" target="_blank"><img src=Slike\logo2.ico height="35" width="35"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">

    <ul class="navbar-nav mr-auto">
	<li class="nav-item">
        <a id="OK" class="nav-link" href="pocetna.php">Početna</a>
      </li>
      <li class="nav-item">
        <a id="OK" class="nav-link" href="prezentacije.php">Prezentacije i literatura</a>
      </li>
      <li class="nav-item">
        <a id="OK" class="nav-link" href="zadaci.php">Zadaci</a>
	 </li>
	 	  <li class="nav-item">
        <a id="Kliknuto" class="nav-link" >Pregled posjeta</a>
	 </li>      

	 </ul>

  <span></span>  <button type="button"  class="btn btn-warning" onclick="location.href='logout.php'" style="float: right; margin-left: 10px; border-radius: 10px;">Logout</button>
		 
     
    
    
  </div>
</nav>
    <main>
           

                 <div id="logovi">
  <button class="button btn-info" style="border-radius: 10px; margin: 20px;" onclick="korisnici();">Prikaži sve korisnike</button>    


                      <?php
             $result = mysqli_query($conn, "SELECT * FROM logs ");
             $num_rows = mysqli_num_rows($result);
                echo "<h4 style='margin:10px;'>Ukupno posjeta: $num_rows</h4>";   
                
             $result = mysqli_query($conn, "SELECT * FROM logs WHERE Date='$today' ");
             $num_rows = mysqli_num_rows($result);
                echo "<h4 style='margin:10px;'>Ukupno posjeta danas: $num_rows  </h4>";      
                ?>
      <span></span>  <button type="button"  class="btn btn-danger" onclick="location.href='Del.php'" style=" border-radius: 10px; float:right; margin-bottom: 2px;">Isprazni tabelu logovanja</button>

             <table>
            <tr>
              <th >Ime</th>
              <th>Vrijeme</th>
              <th>Datum</th>
            </tr>
             <?php
               while ($row = mysqli_fetch_array($result1)) {
                   echo "<tr>";
                   echo "<td>".$row['User']."</td>";
                   echo "<td>".$row['Time']."</td>";
                   echo "<td>".$row['Date']."</td>";
                   echo "</tr>";
               }

            ?>
          </table>
                 </div>
        <div id="korisnici">
    <button class="button btn-info" style="border-radius: 10px; margin: 20px;"onclick="logovi();">Prikaži posjete</button>    

            <?php
             $result = mysqli_query($conn, "SELECT * FROM users ");
             $num_rows = mysqli_num_rows($result);
                echo "<h4 style='margin: 30px;'>Ukupno korisnika: $num_rows</h4>";                   
                ?>
             <table>
            <tr>
              <th >ID</th>
              <th>Ime</th>
              <th>Status</th>
              <th>Operacija</th>

            </tr>
             <?php

             $result1 = mysqli_query($conn, "SELECT Id,User,ModStat FROM users ORDER BY Id ASC");
               while ($row = mysqli_fetch_array($result1)) {
                   echo "<tr>";
                   echo "<td>".$row['Id']."</td>";
                   echo "<td>".$row['User']."</td>";
                   echo "<td>".$row['ModStat']."</td>";
                   echo "<td><form action='adminPanel.php' class='container' method='post'><button class='button btn-danger' type=s'submit' value='".$row['Id']."' name='DEL' style='  border-radius: 10px;'>Dodaj/Ukloni Admina</button></form></td>";
                   echo "</tr>";
               }

            ?>
          </table>
                 </div>
         
    </main>
</body>
</html>
