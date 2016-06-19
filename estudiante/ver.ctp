<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla estudiantes 
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->

<div class="page-header">
<h2>Detalle del estudiante <?php echo $estudiante['estudiante']['nombre']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('apellido'); ?></h2></font>
<dd>
<h4><?php echo $estudiante['estudiante']['apellido']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('identificacion'); ?></h2></font>
<dd>
<h4><?php echo $estudiante['estudiante']['identificacion']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('direccion'); ?></font></h2>
<dd>
<h4><?php echo $estudiante['estudiante']['direccion']; ?></h4>

</dd>



<h2><font color="Blue"><?php echo __('telefono'); ?></font></h2>
<dd>
<h4><?php echo $estudiante['estudiante']['telefono']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('colegio'); ?></font></h2>
<dd>
<h4><?php echo $estudiante['colegio']['id']; ?></h4>

</dd>

</dd>


</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de estudiante',array('controller' => 'estudiantes','action' =>'index'));
?>
<h4>


