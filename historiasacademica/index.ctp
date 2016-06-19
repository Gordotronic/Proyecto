
<h3>Historias Academicas</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador  ver tabla historias academicas
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<table>
<thead>
    
<th>Id</th>
<th>Fecha de Ingreso(AAAA-MM-DD)</th>
<th>Fecha de Salida(AAAA-MM-DD)</th>
<th>Anterior Colegio</th>
<th>Acciones</th>


</thead>


<?php foreach($historiasacademica as $grados): ?>
<tr>
<td><?php echo $grados['historiasacademica']['id'] ?></td>
<td><?php echo $grados['historiasacademica']['fecha_de_ingreso'] ?></td>
<td><?php echo $grados['historiasacademica']['fecha_de_salida'] ?></td>
<td><?php echo $grados['historiasacademica']['anterior_colegio'] ?></td>

<td>
    <?php echo $this->Html->link ('Detalles', array('controller' => 'historiasacademicas','action' =>'ver', $grados['historiasacademica']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$grados['historiasacademica']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$grados['historiasacademica']['id']), null, 'Seguro que quieres borrar?');?>
</td>



</tr>
<?php endforeach; ?>
</table>

<form method="get" action="http://localhost:8081/colegios/historias_academicas/add">
    <button type="submit">Agregar</button>
</form>

