<div class="page-header">
<h2>Detalle del matricula <?php echo $matricula['matricula']['id']; ?> </h2>
</div>
<dl>
<h2><font color="Blue"><?php echo __('Fecha de Inicio'); ?></h2></font>
<br>
<dd>
<h4><?php echo $matricula['matricula']['fecha_inicio']; ?> </h4>

</dd>
<h2><font color="Blue"><?php echo __('Fecha de Vencimiento'); ?></h2></font>
<br>
<dd>
<h4><?php echo $matricula['matricula']['fecha_de_vencimiento']; ?> </h4>

</dd>

<h2><font color="Blue"><?php echo __('estado'); ?></font></h2>
<dd>
<h4><?php echo $matricula['matricula']['estado']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Tipo'); ?></font></h2>
<dd>
<h4><?php echo $matricula['matricula']['tipo']; ?></h4>

</dd>

<h2><font color="Blue"><?php echo __('Valor'); ?></font></h2>
<dd>
<h4><?php echo $matricula['matricula']['valor']; ?></h4>

</dd>


</dd>
</dl>
<h4>
<?php 
echo $this->Html->link('Volver a la lista de matriculas',array('controller' => 'matricula','action' =>'index'));
?>
<h4>





