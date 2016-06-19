<!-- 
*@file index.ctp
*@brief  Descripción
vista del controlador  tabla historias academicas
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->


<h3>Historias Academicas</h3>
<table>
<thead>
    
<th>Id</th>
<th>Fecha de Ingreso(AAAA-MM-DD)</th>
<th>Fecha de Salida(AAAA-MM-DD)</th>
<th>Anterior Colegio</th>


</thead>


<?php foreach($historias_academica as $grados): ?>
<tr>
<td><?php echo $grados['historias_academica']['id'] ?></td>
<td><?php echo $grados['historias_academica']['fecha_de_ingreso'] ?></td>
<td><?php echo $grados['historias_academica']['fecha_de_salida'] ?></td>
<td><?php echo $grados['historias_academica']['anterior_colegio'] ?></td>
<td>
    <?php echo $this->html->link('Editar','edit/'.$grados['historias_academica']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$grados['historias_academica']['id']), null, 'Seguro que quieres borrar?');?>
</td>



</tr>
<?php endforeach; ?>
</table>

<form>
<?php echo $this->html->link('Agregar un nuevo registro','add/'.$grados['historias_academica']['id']) ?>
</form>
<?php echo '</br>'; ?>



<form action="grados">
<button type="submit">Siguiente</button>
</form>

<form action="estudiantes">
<button type="submit">Regresar</button>
</form>






</table>

