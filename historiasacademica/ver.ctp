<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador ver tabla historias academicas
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->


<div class="page-header">
<h2>Detalle del grado <?php echo $grados['grado']['nombre']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('curso'); ?></h2></font>
<dd>
<h4><?php echo $grados['grado']['curso']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('año'); ?></h2></font>
<dd>
<h4><?php echo $grados['grado']['año']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('posicion'); ?></font></h2>
<dd>
<h4><?php echo $grados['grado']['posicion']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('FechaDeInscripcion'); ?></font></h2>
<dd>
<h4><?php echo $grados['grado']['fechadeinscripcion']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('FechaLimiteDeInscripcion'); ?></font></h2>
<dd>
<h4><?php echo $grados['Pinacoteca']['fechadeinscripcion']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Id Colegio'); ?></font></h2>
<dd>
<h4><?php echo $grados['Pintore']['colegio_id']; ?></h4>

</dd>
</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de gradoss',array('controller' => 'grados','action' =>'index'));
?>
<h4>




