function vrijeme()
{
 var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    
	sec=d.getSeconds().toString().length == 1 ? '0'+d.getSeconds() : d.getSeconds(),
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Nedelja','Ponedeljak','Utorak','Srijeda','Četvrtak','Petak','Subota'];
 document.getElementById('Vrijeme').innerHTML = days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()+' '+hours+':'+minutes+':'+sec;
}

    function Ucitaj(n)
    {       var loc=n;
            document.getElementById('Kodovi').setAttribute('src', loc);

    }
   /* function Ucitaj(n){

			switch(n){
				case 1:
             var loc = "Zadaci/Zad1.html";
			 break;
			 
			 case 2:
             var loc = "Zadaci/Zad2.html";
			 break;
			 
			 case 3:
             var loc = "Zadaci/Zad3.html";
			 break;
			 
			 case 4:
             var loc = "Zadaci/Zad4.html";
			 break;

			 case 5:
             var loc = "Zadaci/Zad5.html";
			 break;
			 
			 case 6:
             var loc = "Zadaci/Zad6unos.html";
			 break;
			 
			 case 7:
             var loc = "Zadaci/Zad6.html";
			 break;
			 
			 case 8:
             var loc = "Zadaci/Zad7.html";
			 break;
			 
			 case 9:
             var loc = "Zadaci/Zad9.html";
			 break;
			}


    
  
		
      document.getElementById('Kodovi').setAttribute('src', loc);
		
    }
	
*/
function logovi() {
    var x = document.getElementById("logovi");
    var y = document.getElementById("korisnici");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    y.style.display = "none";

} 
function korisnici() {
    var x = document.getElementById("korisnici");
    var y = document.getElementById("logovi");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    y.style.display = "none";

} 
var i = 0;
var txt = 'Uvod u programiranje';
var speed = 100;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("naslov").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}