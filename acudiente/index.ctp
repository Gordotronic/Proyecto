
<h3>Acudientes</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla acudientes
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
<th>Parentesco</th>
<th>Direccion</th>
<th>Contraseña</th>
<th>Pregunta</th>
<th>Respuesta</th>
<th>Celular</th>
<th>Correo</th>
<th>Acciones</th>


</thead>
<?php foreach($acudiente as $book): ?>
<tr>
<td><?php echo $book['acudiente']['id'] ?></td>
<td><?php echo $book['acudiente']['identificacion'] ?></td>
<td><?php echo $book['acudiente']['nombre'] ?></td>
<td><?php echo $book['acudiente']['apellido'] ?></td>
<td><?php echo $book['acudiente']['telefono'] ?></td>
<td><?php echo $book['acudiente']['parentesco'] ?></td>
<td><?php echo $book['acudiente']['direccion'] ?></td>
<td><?php echo $book['acudiente']['contraseña'] ?></td>
<td><?php echo $book['acudiente']['pregunta'] ?></td>
<td><?php echo $book['acudiente']['respuesta'] ?></td>
<td><?php echo $book['acudiente']['celular'] ?></td>
<td><?php echo $book['acudiente']['email'] ?></td>



<td>
    <?php echo $this->Html->link ('Detalles', array('controller' => 'acudientes','action' =>'ver', $book['acudiente']['id']));?>
    <?php echo $this->html->link('Editar','edit/'.$book['acudiente']['id']) ?>
    <?php /*echo $this->html->link('delete','delete/'.$book['acudiente']['id']) */?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$book['acudiente']['id']), null, 'Seguro que quieres borrar?');?>
    
</td>
</tr>

<?php endforeach; ?>

</table>

<form method="get" action="http://localhost:8081/colegios/acudientes/add">
    <button type="submit">Agregar</button>
</form>
