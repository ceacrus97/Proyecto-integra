<?php
require_once ('db2.php');
/*Le indico que mire la tabla experiencia*/
$sql = "SELECT * FROM evento";
$resultado = $conn->query($sql);
/*Si no esta vacio incluira en mi pagina este codigo donde mostrar cada experiencia de mi base de datos*/
if ($resultado->num_rows > 0){
	while($row = $resultado->fetch_assoc()){
		echo  "<div class='tabla'>".
				"<p>Codigo: ". $row["cod_evento"] . " Titulo: ".
				$row["titulo"].
				"</p>".
				"</div>";
	}
}
else{
	echo "Fallo";
}
?>