<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador ver tabla cupo
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->



<div class="page-header">
<h2>Detalle del cupo <?php echo $cupo['cupo']['nombre']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('Codigo'); ?></h2></font>
<dd>
<h4><?php echo $cupos['cupo']['codigo']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('Dimensiones'); ?></h2></font>
<dd>
<h4><?php echo $cupos['cupo']['dimensiones']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('Fecha'); ?></font></h2>
<dd>
<h4><?php echo $cupos['cupo']['fecha']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Tecnica'); ?></font></h2>
<dd>
<h4><?php echo $cupos['cupo']['tecnica']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Pinacoteca'); ?></font></h2>
<dd>
<h4><?php echo $cupos['Pinacoteca']['nombre']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Pintor'); ?></font></h2>
<dd>
<h4><?php echo $cupos['Pintore']['nombre']; ?></h4>

</dd>
</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de cuposs',array('controller' => 'cuposs','action' =>'index'));
?>
<h4>



