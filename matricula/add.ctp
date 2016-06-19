<h3>Matriculas</h3>
<a>
<?php echo $this->form->create('matricula');?>
<fieldset>
<legend>Agregue una nueva matricula</legend>
<?php
echo $this->form->input('id');
echo "</br>";
echo "Fecha de inicio(AAAA-MM-DD)";
echo "</br>";
echo $this->form->date('fecha_inicio');
echo "</br>";
echo "Fecha de vencimiento(AAAA-MM-DD)";
echo $this->form->date('fecha_de_vencimiento');
echo "</br>";
echo $this->form->input('id_estudiante');
echo "</br>";
echo $this->form->input('estado');
echo $this->form->input('tipo');
echo $this->form->input('valor');
echo $this->form->input('estudiante_id');
?>
</fieldset>
</a>
<?php echo $this->form->end('Agregar');?>

