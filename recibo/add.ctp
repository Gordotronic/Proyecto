<h3>Recibos</h3>
<a>
<?php echo $this->form->create('recibo');?>
<fieldset>
<legend>Agregue un nuevo recibo</legend>
<?php
echo $this->form->input('id');
echo $this->form->input('forma_de_pago');
echo $this->form->input('valor');
echo $this->form->input('cuotas');
echo $this->form->input('matricula_id');
?>
</fieldset>
</a>
<?php echo $this->form->end('Agregar');?>
