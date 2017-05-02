  					<!DOCTYPE html>
  					<html>
  					<head>
  						<title></title>


<style type="text/css">
	

	table th {background-color: white; font }

  th { font: 20px sans-serif  }

	table tr:nth-child(odd) {background-color: gray;}

	table tr:nth-child(even) {background-color: pink;}

   td {
width: 1000px; /*Aquí va el ancho de la Celda*/
height: 10px; /*Aquí el Alto*/

 
  font: 18px sans-serif;


}

</style>



  					</head>
  					<body>

  					<?php
  							//conexion de base de datos

                  		$conect= mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());

                  		

                  		mysql_select_db("nuevva_db") or die ('No se pudo seleccionar la base de datos');
                  	
                  	?>
                  	<center>

                  	<table border="1">
                  		<tr>
                  			
                  		</tr>
                  		<tr>
                  			<th>ID</th>
                  			<th>Scientific Name</th>
                  			<th>Common Name</th>
                  			<th>Family</th>
                  			<th>Taxonomic Group</th>
                  		</tr>



                  			<?php

                  		// Realizar una consulta MySQL
					
					$result = mysql_query("SELECT * FROM Animals") or die('Consulta fallida: ' . mysql_error());

						while($row= mysql_fetch_array($result)){ ?>

								<tr>
									<td><?php echo $row["Id_Animals"];?></td>
									<td><?php echo $row["Scientific_Name"];?></td>
									<td><?php echo $row["Common_Name"];?></td>
									<td><?php echo $row["Family"];?></td>
									<td><?php echo $row["Taxonomic_Group"];?></td>
								</tr>


								<?php
							}



                  			?>
</table>

</center>
                  		


                  	</table>
  					
  					</body>
  					</html>

  					