<!DOCTYPE html>
<html lang= "en-US">
<head>
    <meta charset="utf-8">
	<title></title>
</head>
<body>
<table>
<tr>
  <td><img src="gato1" width="250" height="250" align="center"/></td>
  <td><img src="gato2" width="250" height="250" align="center" /></td>
</tr>
 
<tr>
  <td><img src="gato3" width="250" height="250" align="center" /></td>
  <td><img src="gato4" width="250" height="250" align="center" /></td>
 
</tr>
 

</table>
 <button onclick="verificar1()">Aceptar</button>



<button>
 <b>Menú</b>
<br>
</button>

<button>
 <b>Siguiente cuadro</b>
<br>
</button>

<button>
 <b>Pista</b>
<br>
</button>

</tr>
<br>
  <input type="text" name="Word"><br>

</body>

<?php
$palabras = array("gato");
$puntuaciones = array(0);
 
  function verificar1 (){


  	var porId=document.getElementById("Word").value;
  	if ($palabras{0}== porId) {
  	
    echo "Excelente" ;
    
    $puntuaciones{0}= $puntuaciones{0}+10;
  }
  return  $puntuaciones{0};
}

if(onclick.Aceptar.do {
  $temp = array() ;
  $temp = verificar1();
  echo "Tu puntuacion es" $temp{0};
# code...
} while ( 10<= 10); 


?>


</html>						

