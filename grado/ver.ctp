<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador tabla grado
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->


<div class="page-header">
<h2>Detalle del grado <?php echo $grado['grado']['id']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('curso'); ?></h2></font>
<dd>
<h4><?php echo $grado['grado']['curso']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('año'); ?></h2></font>
<dd>
<h4><?php echo $grado['grado']['año']; ?> </h4>

</dd>


<h2><font color="Blue"><?php echo __('Fecha_De_Inscripcion'); ?></font></h2>
<dd>
<h4><?php echo $grado['grado']['fecha_de_inscripcion']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Fecha Limite De Inscripcion'); ?></font></h2>
<dd>
<h4><?php echo $grado['grado']['fecha_limite_inscripcion']; ?></h4>

</dd>


</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de grados',array('controller' => 'grados','action' =>'index'));
?>
<h4>



