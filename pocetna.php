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
  <title>Uvod u programiranje</title>
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
<body class="bg-dark" onload="setInterval(vrijeme,60)">
  
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <a class="navbar-brand" href="http://www.etf.unssa.rs.ba/" target="_blank"><img src=Slike\logo2.ico height="35" width="35"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">

    <ul class="navbar-nav mr-auto">
	<li class="nav-item">
        <a id="Kliknuto" class="nav-link" >Početna</a>
      </li>
      <li class="nav-item">
        <a id="OK" class="nav-link" href="prezentacije.php">Prezentacije i literatura</a>
      </li>
      <li class="nav-item">
        <a id="OK" class="nav-link" href="zadaci.php">Zadaci</a>
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
          <h4 class="modal-title">Uvod u programiranje</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            
            <?php if ( !empty($_SESSION['User'])  ): ?>
      
            <div><strong> Dobro došli <?php echo $_SESSION['User'] ?> </strong>
                </div> 
                        <?php endif; ?>
                    
        
            
        <div style="margin-top:50px;">
			Autor: Dejan Čančar
		<br>Kontakt: ca_na@outlook.com
            </div>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Izađi</button>
        </div>
        
      </div>
    </div>
  </div>
  <main class="container-fluid" >
 <h2  align=center>Uvod u programiranje </h2> 
 <strong><p align=right id="Vrijeme"></p></strong>

<p style="padding:10px;">

 <h4>Istorija jezika C</h4>
 Programski jezik C je prvi put razvijen početkom 1970-tih u Belovim laboratorijama (Bell Labs), u SAD kao osnova za razvoj operativnog sistema UNIX. 
 UNIX je namenjen za efikasan rad na malim računarima i prvi je operativni sistem koji je napisan u višem programskom jeziku. 
 Do tada su svi operativni sistemi pisani u asembleru (assembly language). 
 Drugi viši programski jezici tog vremena (COBOL, FORTRAN, PL/I, ALGOLl...) su bili previše spori da bi se na njima zasnivao operativni sistem, pa je doneta odluka da se napiše novi programski jezik. 
 Kao osnova za programski jezik C su poslužila dva, u to vreme efiksana, viša programska jezika: ALGOL i BCPL.
 

<h4>Pisanje programa</h4>
Da bi se računaru zadao niz uzastopnih naredbi, naredbe se mogu unositi ručno ili mogu prethodno biti
napisane u nekom programu za obradu i unos teksta (text editor). Text editor se koristi za pisanje novog ili
izmenu prethodno napisanog programa. Text editor može biti bilo koji od postojećih programa za unos
teksta (notepad, wordpad i slično) ili može biti integrisan u neko posebno razvojno okruženje za pisanje
i prevođenje programa (Turbo C, Borland C, Microsoft Visual Studio ...). 
 
 
 
</p>

<div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="border-radius: 40px;" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="Slike\visual.png" >
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="Slike\codeblocks.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="Slike\notepad.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only ">Next</span>
  </a>
</div>
  </main>


 </div>        
</body>
</html>
