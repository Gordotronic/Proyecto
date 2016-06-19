<h3>Estudiantes</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador  tabla estudiantes
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<table>
<thead>
<th>Id</th>
<th>Identificacion</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Telefono</th>
<th>Direccion</th>
<th>FechaDeInscripcion(AAAA-MM-DD)</th>
<th>Colegio ID</th>
<th>Nombre Colegio</th>


</thead>
<?php foreach($estudiante as $estudiantes): ?>
<tr>
<td><?php echo $estudiantes['estudiante']['id'] ?></td>
<td><?php echo $estudiantes['estudiante']['identificacion'] ?></td>
<td><?php echo $estudiantes['estudiante']['nombre'] ?></td>
<td><?php echo $estudiantes['estudiante']['apellido'] ?></td>
<td><?php echo $estudiantes['estudiante']['telefono'] ?></td>
<td><?php echo $estudiantes['estudiante']['direccion'] ?></td>
<td><?php echo $estudiantes['estudiante']['fecha_de_inscripcion'] ?></td>
<td><?php echo $estudiantes['estudiante']['colegio_id'] ?></td>
<td><?php echo $estudiantes['colegio']['nombre'] ?></td>
 

<td>

    <?php echo $this->html->link('Editar','edit/'.$estudiantes['estudiante']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$estudiantes['estudiante']['id']), null, 'Seguro que quieres borrar?');?>
</td>



<td>
<form>
<?php echo $this->html->link('Agregar un nuevo registro','add/'.$estudiantes['estudiante']['id']) ?>
</form>
</td>
</tr>
<?php endforeach; ?>
</table>

<?php echo '</br>'; ?>

<form action="historias_academicas">
<button type="submit">Agregar una historia academica</button>
</form>

<form action="grados">
<button type="submit">Siguiente</button>
</form>

<form action="acudientes">
<button type="submit">Regresar</button>
</form>