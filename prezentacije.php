<?php
    require("config.php");
    if(empty($_SESSION['User'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
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
            
       <p > Kontakt: ca_na@outlook.com </p>
		</div>
        
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

<div class="row container" >
        <div  class="col-lg-4" >
            <iframe src='https://onedrive.live.com/embed?cid=63AA891890832510&resid=63AA891890832510%21556&authkey=AKikM6-sVkxSB98&em=2&wdAr=1.3333333333333333' style="  border-radius: 40px;" height='350px'  frameborder='0' >This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a> presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>        		
			</div>
        <div class="col-lg-4">                                                                                                                                         
			<iframe src='https://onedrive.live.com/embed?cid=63AA891890832510&resid=63AA891890832510%21558&authkey=AAZqZvzpAfRpqno&em=2&wdAr=1.3333333333333333' style="border-radius: 40px;" height='350px'  frameborder='0' >This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a> presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>
        </div>     
         <div class="col-lg-4">  
<iframe src='https://onedrive.live.com/embed?cid=63AA891890832510&resid=63AA891890832510%21683&authkey=AI1bck6NGhCefUQ&em=2&wdAr=1.3333333333333333' style="  border-radius: 40px;" height='350px'  frameborder='0' >This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a> presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>      
              </div>
                  </div>     


  </main>


</body>
</html>
