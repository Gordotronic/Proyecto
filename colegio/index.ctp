<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador editar tabla colegio
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->

<h3>Colegios</h3>
<table>
<thead>
    
<th>Id</th>
<th>Codigo Nit</th>
<th>Nombre</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Pagina Web</th>
<th>Email</th>
<th>Jornada</th>
<th>Calendario</th>
<th>Forma de pago</th>
<th>Transporte</th>
<th>Acciones</th>



</thead>


<?php foreach($colegio as $colegios): ?>
<tr>
<td><?php echo $colegios['colegio']['id'] ?></td>
<td><?php echo $colegios['colegio']['codigonit'] ?></td>
<td><?php echo $colegios['colegio']['nombre'] ?></td>
<td><?php echo $colegios['colegio']['direccion'] ?></td>
<td><?php echo $colegios['colegio']['telefono'] ?></td>
<td><?php echo $colegios['colegio']['pagina_web'] ?></td>
<td><?php echo $colegios['colegio']['email'] ?></td>
<td><?php echo $colegios['colegio']['jornada'] ?></td>
<td><?php echo $colegios['colegio']['calendario'] ?></td>
<td><?php echo $colegios['colegio']['forma_pago'] ?></td>
<td><?php echo $colegios['colegio']['transporte'] ?></td>


<td>
    <?php echo $this->Html->link ('Detalles', array('controller' => 'colegios','action' =>'ver', $colegios['colegio']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$colegios['colegio']['id']) ?>
    <?php echo $this->html->link('Eliminar', array('action'=>'delete',
$colegios['colegio']['id']), null, 'Seguro que quieres eliminar?');?>
</td>
</tr>
<?php endforeach; ?>
</table>
<form method="get" action="http://localhost:8081/colegios/colegios/add">
    <button type="submit">Agregar</button>
</form>
