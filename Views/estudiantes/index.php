<div class="box-principal">
<h3 class="titulo">Listado de Estudiantes<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de estudiantes</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Imagen</th>
		      <th>Nombre</th>
		      <th>Edad</th>
		      <th>Sección</th>
		      <th>Promedio</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>"></td>
					<td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
			    	<td><?php echo $row['edad']; ?></td>
			    	<td><?php echo $row['nombre_seccion']; ?></td>
			    	<td><?php echo $row['promedio']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>