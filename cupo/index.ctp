<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla cupo
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->


<h3>Cupos</h3>
<table>
<thead>
    
<th>Id</th>
<th>Preescolar</th>
<th>Primero</th>
<th>Segundo</th>
<th>Tercero</th>
<th>Cuarto</th>
<th>Quinto</th>
<th>Sexto</th>
<th>Septimo</th>
<th>Octavo</th>
<th>Noveno</th>
<th>Decimo</th>
<th>Undecimo</th>
<th>Acciones</th>




</thead>


<?php foreach($cupo as $cupos): ?>
<tr>
<td><?php echo $cupos['cupo']['id'] ?></td>
<td><?php echo $cupos['cupo']['preescolar'] ?></td>
<td><?php echo $cupos['cupo']['primero'] ?></td>
<td><?php echo $cupos['cupo']['segundo'] ?></td>
<td><?php echo $cupos['cupo']['tercero'] ?></td>
<td><?php echo $cupos['cupo']['cuarto'] ?></td>
<td><?php echo $cupos['cupo']['quinto'] ?></td>
<td><?php echo $cupos['cupo']['sexto'] ?></td>
<td><?php echo $cupos['cupo']['septimo'] ?></td>
<td><?php echo $cupos['cupo']['octavo'] ?></td>
<td><?php echo $cupos['cupo']['noveno'] ?></td>
<td><?php echo $cupos['cupo']['decimo'] ?></td>
<td><?php echo $cupos['cupo']['undecimo'] ?></td>


<td>
    <?php // echo $this->Html->link ('Detalles', array('controller' => 'cupos','action' =>'ver', $cupos['cupo']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$cupos['cupo']['id']) ?>
    <?php echo $this->html->link('Eliminar', array('action'=>'delete',
$cupos['cupo']['id']), null, 'Seguro que quieres eliminar?');?>
</td>
</tr>
<?php endforeach; ?>

</table>
<form method="get" action="http://localhost:8081/colegios/cupos/add">
    <button type="submit">Agregar</button>
</form>
