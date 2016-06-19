<h3>Grados</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla grado
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<table>
<thead>
<th>Id</th>
<th>Curso</th>
<th>Año</th>
<th>Fecha de inscripcion(AAAA-MM-DD)</th>
<th>Fecha de limite inscripcion(AAAA-MM-DD)</th>
<th>Colegio_Id</th>
</thead>

<?php foreach($grado as $grados): ?>
<tr>
<td><?php echo $grados['grado']['id'] ?></td>
<td><?php echo $grados['grado']['curso'] ?></td>
<td><?php echo $grados['grado']['año'] ?></td>
<td><?php echo $grados['grado']['fecha_de_inscripcion'] ?></td>
<td><?php echo $grados['grado']['fecha_limite_inscripcion'] ?></td>
<td><?php echo $grados['grado']['colegio_id'] ?></td>
<td>
    <?php echo $this->html->link('Editar','edit/'.$grados['grado']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$grados['grado']['id']), null, 'Seguro que quieres borrar?');?>
</td>
</tr>
<?php endforeach; ?>
</table>
<form>
<?php echo $this->html->link('Agregar un nuevo registro','add/'.$grados['grado']['id']) ?>
</form>

<?php echo '</br>'; ?>
<form action="matriculas">
<button type="submit">Siguiente</button>
</form>

<form action="estudiantes">
<button type="submit">Regresar</button>
</form>



