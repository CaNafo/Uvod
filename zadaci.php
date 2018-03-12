<?php
    require("config.php");
    mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT=");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uvod u programiranje zadaci</title>
  <link rel="shortcut icon" href="Slike/logo.ico"/>
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
    <a class="navbar-brand" href="http://www.etf.unssa.rs.ba/" target="_blank"><img src=Slike/logo2.ico height="35" width="35"></a>
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
        <a id="Kliknuto" class="nav-link" >Zadaci</a>
	 </li>
	 	        
         <?php  if(!strcmp($_SESSION['ModStat'],"A") && !empty($_SESSION['User'])) 
         { 
              echo "<li class='nav-item'>";
        echo "<a id='OK' class='nav-link' href='adminPanel.php'>Pregled posjeta</a>";
       echo "  </li>";
            	}       
                ?>

	 </ul>

		<button type="button"  class="btn btn-info" data-toggle="modal" data-target="#myModal" > Informacije</button>
          <?php  if(!empty($_SESSION['User'])) 
              echo "  <span></span>  <button type='button'  class='btn btn-warning' onclick=\"location.href='logout.php'\" style='float: right; margin-left: 10px;'>Logout</button>";
          else {
                            echo "  <span></span>  <button type='button'  class='guestbtn' onclick=\"location.href='index.php'\" style='float: right; margin-left: 10px; border-radius: 10px;'>Login</button>";

          }
          ?>

                    
    
    
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
              <?php
            if(empty($_SESSION['User'])) 
    {
        echo "Morate biti ulogovani da bi pristupili početnoj stranici i prezentacijama i literaturi";
    }
    else
        echo '<h4> Dobro došli ' . $_SESSION['User'] .'</h4>';
    ?>
		
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
 <h2  align=center>Zadaci </h2> 
  <p align=right id="Vrijeme"></p>


  <div class="bg-dark" style="color:white; border-top-left-radius: 25px; border-bottom-left-radius: 25px; float:left; width: 200px; height: 1400px; overflow-y: scroll; ">
  <h3 align=center>Uvodni zadaci</h3>
<ul id="Zadaci">
<li><a href="#" onclick="Ucitaj('Zadaci/Zad1.html');" >Hello World</a></li>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad2.html');" >Unos i ispis 1</a></li>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad3.html');" >Unos i ispis 2</a></li>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad4.html');" >Unos i ispis 3</a></li>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad5.html');" >Unos i ispis 4</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad6unos.html');" >Unos i ispis 5</a></li> 
</ul>
<h3 align="center">Uslov (IF)</h3>
<ul>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad6.html');" >Uslov If 1</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad7.html');" >Uslov If 2</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad9.html');" >Uslov If 3</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad10.html');" >Uslov If 4</a></li> 
</ul>
<h3 align="center">Petlje</h3>
<ul>
<li><a href="#" onclick="Ucitaj('Zadaci/Zad11.html');" >For petlja 1</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad12.html');" >For petlja 2</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad13.html');" >For petlja 3</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad14.html');" >For petlja 4</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad15.html');" >For petlja 5</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad16.html');" >For petlja 6</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad17.html');" >While petlja 1</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad18.html');" >While petlja 2</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad19.html');" >While petlja 3</a></li> 
<li><a href="#" onclick="Ucitaj('Zadaci/Zad20.html');" >While petlja 4</a></li> 
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
</ul>
<h3 align="center">Nizovi </h3>
<ul>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
</ul>
<h3 align="center">Matrice</h3>
<ul>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>
<li><a>Zadatak</a></li>

</ul>
    </div>
	<div>
<iframe  style="posmargin-left: 10px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;"id="Kodovi" src="Zadaci/Zad1.html" class="col-10"  height="1400"></iframe>
</div>

  </main>

 </div>   
  <script src="skripta.js"></script>
 
</body>
</html>
