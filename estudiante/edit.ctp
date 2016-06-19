<h3>Editar Estudiante</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador editar tabla estudiantes
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<a>
<?php echo $this->form->create('estudiante');?>
<fieldset>
<?php
echo $this->form->input('id');
echo $this->form->input('identificacion');
echo $this->form->input('nombre');
echo $this->form->input('apellido');
echo $this->form->input('direccion');
echo $this->form->input('telefono');
echo "</br>";
echo "Fecha de inscripcion (AAAA-MM-DD)";
echo $this->form->date('fecha_de_inscripcion');
echo $this->form->input('colegio_id');

?>
</fieldset>
</a>
<?php echo $this->Form->end('Guardar Cambios');?>

