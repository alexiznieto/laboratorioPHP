<CENTER><H1>Calcular La Nota Final De La Materia</H1></CENTER>
<?php
 
	 $parcial1=$_POST['parcial1'];
	 $parcial2=$_POST['parcial2'];
	 $parcial3=$_POST['parcial3'];
	 $examenFinal=$_POST['examenFinal'];
	 $trabajoFinal=$_POST['trabajoFinal'];
	 $promedioParciales= ($parcial1 + $parcial2 + $parcial3)/3;

	 echo "La nota del parcial 1 es:".$parcial1."<br><p>";
	  echo "La nota del parcial 2 es:".$parcial2."<br><p>";
	  echo "La nota del parcial 3 es:".$parcial3."<br><p>";
	 echo "La nota del examen final es:".$examenFinal."<br><p>";
	 echo "La nota del trabajo final es:".$trabajoFinal."<br><p>";

	 $porcentajeParciales= $promedioParciales*0.35;
	 $porcentajeExamen=$examenFinal*0.35;
	 $porcentajeTrabajo=$trabajoFinal*0.30;
	 $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;
	 
	 echo "La nota final es: ".$notaFinal."<br>";
	 
	 if($notaFinal<3){  
	  echo "El estudiante no aprobó";
	  }
	 else{
	  echo "El estudiante aprobó";
	  }
 
 
?>