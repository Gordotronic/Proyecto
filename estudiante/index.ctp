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
<th>Acciones</th>


</thead>
<?php foreach($estudiante as $book): ?>
<tr>
<td><?php echo $book['estudiante']['id'] ?></td>
<td><?php echo $book['estudiante']['identificacion'] ?></td>
<td><?php echo $book['estudiante']['nombre'] ?></td>
<td><?php echo $book['estudiante']['apellido'] ?></td>
<td><?php echo $book['estudiante']['telefono'] ?></td>
<td><?php echo $book['estudiante']['direccion'] ?></td>
<td><?php echo $book['estudiante']['fecha_de_inscripcion'] ?></td>
<td><?php echo $book['estudiante']['colegio_id'] ?></td>
<td><?php echo $book['colegio']['nombre'] ?></td>

 

<td>
    <?php echo $this->Html->link ('Detalles', array('controller' => 'estudiantes','action' =>'ver', $book['estudiante']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$book['estudiante']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$book['estudiante']['id']), null, 'Seguro que quieres borrar?');?>
</td>

</tr>
<?php endforeach; ?>
</table>
<form method="get" action="http://localhost:8081/colegios/historias_academicas">
    <button type="submit">Historia Academica</button>
</form>


<form method="get" action="http://localhost:8081/colegios/estudiantes/add">
    <button type="submit">Agregar</button>
</form>


