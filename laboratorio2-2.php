   <H1>Calcular el salario de un vendedor</H1></CENTER>
<?php
 
	 $nombre=$_POST['nombre'];
	 $cantidad=$_POST['cantidad'];
	 $precioTotal=$_POST['precioTotal'];
	 
	 echo "El nombre del vendedor es: ".$nombre."<br>";
	  echo "La cantidad de automoviles vendidos es: ".$cantidad."<br>";
	  echo "El precio total de automoviles vendidos es:".$precioTotal."<br>";
	 
	 $salarioBasico=450000;
	 $comision=$cantidad*50000;
	 $porcentajeVenta=$precioTotal*0.05;
	 $salario=$salarioBasico+$comision+$porcentajeVenta;

	 echo "El salario del vendedor es: ".$salario."<br>";
 
?>