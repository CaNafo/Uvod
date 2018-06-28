<?php
    require("config.php");
    if(empty($_SESSION['User'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
    if(!empty($_POST)){
		if(!empty($_POST["Link"])){
        $link = $_POST["Link"];
        $query = " 
            INSERT INTO prezentacije ( 
                Link 
                ) 
                VALUES ( 
                '$link'
            ) 
        ";
		
        $result = mysqli_query($conn, $query);
		}
    }
			 $name = $_POST['DEL'];
             $result = mysqli_query($conn, "SELECT * FROM prezentacije
                     WHERE ID LIKE '%{$name}%'");
					   while ($row = mysqli_fetch_array($result)) {
                if(!(strcmp($name,$row['ID']))){
            echo '<script>alert("Uspješno ste uklonili prezentaciju!")</script>';
            $result = mysqli_query($conn,"DELETE FROM `prezentacije` WHERE `prezentacije`.`ID` = $name");

                     break;
                }
                              

        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uvod u programiranje prezentacije</title>
  <link rel="shortcut icon" href="Slike\logo.ico"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="stilovi.css">
  <script src="skripta.js"></script>

</head>
<body  class="bg-dark container-fluid" onload="setInterval(vrijeme,60)">
  

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
        <a id="Kliknuto" class="nav-link">Prezentacije i literatura</a>
      </li>
      <li class="nav-item">
        <a id="OK" class="nav-link" href="zadaci.php" >Zadaci</a>
	 </li>
	 	
         <?php  if(!strcmp($_SESSION['ModStat'],"A")) 
         { 
              echo "<li class='nav-item'>";
        echo "<a id='OK' class='nav-link' href='adminPanel.php'>Pregled posjeta</a>";
       echo "  </li>";
            	}       
                ?>
                     
	 </ul>

  <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#myModal" > Informacije</button>     
  <span></span>  <button type="button"  class="btn btn-warning" onclick="location.href='logout.php'" style="float: right; margin-left: 10px;">Logout</button>
           
     
    
    
  </div>
</nav>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <div style=" margin: 0 auto;"><h3 class="modal-title">Uvod u programiranje</h3>
           
                
            </div>
              
                   
               
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <h4> Dobro došli <?php echo $_SESSION['User'] ?> </h4>
            
		<div style="margin-top:50px;">
			Autor: Dejan Čančar
		<br>Kontakt: ca_na@outlook.com
            </div>		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Izađi</button>
        </div>
        
      </div>
    </div>
  </div>
  <main class="container-fluid" >
 <h2  align=center>Prezentacije i literatura </h2> 
<p align=right id="Vrijeme"></p>

<div class="row container-fluid" >
<?php
             $result = mysqli_query($conn, "SELECT * FROM prezentacije ");
			 	  while ($row = mysqli_fetch_array($result)) {
					    echo "<div class='col-lg-4'style='margin-top: 50px;' align=center>";
					   if(!strcmp($_SESSION['ModStat'],"A")) {
						  echo "<form  action='prezentacije.php' class='container' method='post'><button class='button btn-danger' type=s'submit' value='".$row['ID']."' name='DEL' style=' margin: 10px;  border-radius: 10px;'>Ukloni prezentaciju</button></form>";
					   }
						    
                                echo "
				  <iframe src=".$row['Link']." style=' border-radius:40px;' height='600px' width='100%'  frameborder='0' >This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a> presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>
				  </div>";
			  }
           if(!strcmp($_SESSION['ModStat'],"A")) 
          { 
            echo " <form action='prezentacije.php' style='margin-top: 50px;' method='post'>
          </div>
            <label for='link'><b>Unesite link prezentacije</b></label>
            <br>  <input placeholder='Unesite link' name='Link' style='border-radius:10px;' required>  
           <span></span>  <button type='submit' class='btn btn-info' style='margin-left: 20px;'>Dodaj prezentaciju</button>
            </form> ";
          	}  
     ?>
       
			  
              </div>  

	

       
  </main>


</body>
</html>
