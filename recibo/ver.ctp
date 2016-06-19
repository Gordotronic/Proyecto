<div class="page-header">
<h2>Detalle del recibo <?php echo $recibo['recibo']['id']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('forma_de_pago'); ?></h2></font>
<dd>
<h4><?php echo $recibo['recibo']['forma_de_pago']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('valor'); ?></h2></font>
<dd>
<h4><?php echo $recibo['recibo']['valor']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('cuotas'); ?></font></h2>
<dd>
<h4><?php echo $recibo['recibo']['cuotas']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('matricula_id'); ?></font></h2>
<dd>
<h4><?php echo $recibo['recibo']['matricula_id']; ?></h4>


</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de recibos',array('controller' => 'recibos','action' =>'index'));
?>
<h4>



