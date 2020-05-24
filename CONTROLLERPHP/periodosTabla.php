<?php 
/*

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del Periodo</th>
      <th scope="col">Contraseña para el Periodo</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">OT15</th>
      <td>OT15</td>
    </tr>
  </tbody>
</table>


*/
        
        require('conexion.php');
        $sql = "SELECT Nombre,Contrasena FROM periodo";
		$consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta");
		$nfilas = mysqli_num_rows ($consulta);

		echo '
		 <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del Periodo</th>
      <th scope="col">Contraseña para el Periodo</th>

    </tr>
  </thead>
  <tbody>
		';

		 for ($i=0; $i<$nfilas; $i++)
		 {
			$tupla = mysqli_fetch_array ($consulta);
			$nombre = $tupla["Nombre"] ;
			$contra = $tupla["Contrasena"];

			echo "<tr>";
			echo '<th scope="col">'.$nombre.'</th>';
			echo '<td scope="col">'.$contra.'</td>';
			echo "</tr>";

		}

		echo "</tbody>
</table>";



?>
