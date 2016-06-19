<h3>Matriculas</h3>
<table>
<thead>
    
<th>Id</th>
<th>Fecha de inicio(AAAA-MM-DD)</th>
<th>Fecha de vencimiento(AAAA-MM-DD)</th>
<th>Identificacion del estudiante</th>
<th>Estado</th>
<th>Tipo</th>
<th>Valor</th>
<th>Estudiante ID</th>
<th>Acciones</th>

</thead>
<?php foreach($matricula as $matriculas): ?>
<tr>
<td><?php echo $matriculas['matricula']['id'] ?></td>
<td><?php echo $matriculas['matricula']['fecha_inicio'] ?></td>
<td><?php echo $matriculas['matricula']['fecha_de_vencimiento'] ?></td>
<td><?php echo $matriculas['matricula']['id_estudiante'] ?></td>
<td><?php echo $matriculas['matricula']['estado'] ?></td>
<td><?php echo $matriculas['matricula']['tipo'] ?></td>
<td><?php echo $matriculas['matricula']['valor'] ?></td>
<td><?php echo $matriculas['matricula']['estudiante_id'] ?></td>

<td>
    <?php echo $this->Html->link ('Detalles', array('controller' => 'matriculas','action' =>'ver', $matriculas['matricula']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$matriculas['matricula']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$matriculas['matricula']['id']), null, 'Seguro que quieres borrar?');?>
</td>

</tr>

</table>
<?php endforeach; ?>
<form method="get" action="http://localhost:8081/colegios/matriculas/add">
    <button type="submit">Agregar</button>
</form>

