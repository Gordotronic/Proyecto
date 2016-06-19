<!-- 
*@file edit.ctp
*@brief  Descripción
* vista del controlador ver tabla acudientes
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->

<div class="page-header">
<h2>Detalle del acudiente <?php echo $acudiente['acudiente']['nombre']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('codigo'); ?></h2></font>
<dd>
<h4><?php echo $acudiente['acudiente']['id']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('telefono'); ?></h2></font>
<dd>
<h4><?php echo $acudiente['acudiente']['telefono']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('direccion'); ?></font></h2>
<dd>
<h4><?php echo $acudiente['acudiente']['direccion']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('email'); ?></font></h2>
<dd>
<h4><?php echo $acudiente['acudiente']['email']; ?></h4>

</dd>



</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de acudientes',array('controller' => 'acudientes','action' =>'index'));
?>
<h4>



