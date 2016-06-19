<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla cupo
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
<th>Cupos 12</th>
<th>Cupos 11</th>
<th>Cupos 10</th>
<th>Cupos 09</th>
<th>Cupos 08</th>
<th>Cupos 07</th>
<th>Cupos 06</th>
<th>Cupos 05</th>
<th>Cupos 04</th>
<th>Cupos 03</th>
<th>Cupos 02</th>
<th>Cupos 01</th>
<th>Cupos Pre-escolar</th>
<th>Cupos Transicion</th>


</thead>


<?php foreach($colegio as $colegios): ?>
<tr>
<td><?php echo $colegios['colegio']['id'] ?></td>
<td><?php echo $colegios['colegio']['codigo_nit'] ?></td>
<td><?php echo $colegios['colegio']['nombre'] ?></td>
<td><?php echo $colegios['colegio']['direccion'] ?></td>
<td><?php echo $colegios['colegio']['telefono'] ?></td>
<td><?php echo $colegios['colegio']['pagina_web'] ?></td>
<td><?php echo $colegios['colegio']['email'] ?></td>
<td><?php echo $colegios['colegio']['jornada'] ?></td>
<td><?php echo $colegios['colegio']['calendario'] ?></td>
<td><?php echo $colegios['colegio']['forma_pago'] ?></td>
<td><?php echo $colegios['colegio']['transporte'] ?></td>
<td><?php echo $colegios['colegio']['cupos12'] ?></td>
<td><?php echo $colegios['colegio']['cupos11'] ?></td>
<td><?php echo $colegios['colegio']['cupos10'] ?></td>
<td><?php echo $colegios['colegio']['cupos09'] ?></td>
<td><?php echo $colegios['colegio']['cupos08'] ?></td>
<td><?php echo $colegios['colegio']['cupos07'] ?></td>
<td><?php echo $colegios['colegio']['cupos06'] ?></td>
<td><?php echo $colegios['colegio']['cupos05'] ?></td>
<td><?php echo $colegios['colegio']['cupos04'] ?></td>
<td><?php echo $colegios['colegio']['cupos03'] ?></td>
<td><?php echo $colegios['colegio']['cupos02'] ?></td>
<td><?php echo $colegios['colegio']['cupos01'] ?></td>
<td><?php echo $colegios['colegio']['cupospres'] ?></td>
<td><?php echo $colegios['colegio']['cupostrans'] ?></td>
<td>
    <?php echo $this->html->link('edit','edit/'.$colegios['colegio']['id']) ?>
    <?php echo $this->html->link('Delete', array('action'=>'delete',
$colegios['colegio']['id']), null, 'Seguro que quieres borrar?');?>
</td>
</tr>
<?php endforeach; ?>
</table>
<form>
<?php echo $this->html->link('Agregar un nuevo registro','add/'.$colegios['colegio']['id']) ?>
   
</form>







</table>