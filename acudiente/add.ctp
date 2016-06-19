<!-- 
*@file edit.ctp
*@brief  Descripción
* vista del controlador añadir tabla acudientes
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<a>
<?php echo $this->form->create('acudiente');?>
<fieldset>
<legend>Agregue un nuevo acudiente</legend>
<?php
echo $this->form->input('id');
echo $this->form->input('identificacion');
echo $this->form->input('nombre');
echo $this->form->input('apellido');
echo $this->form->input('telefono');
echo $this->form->input('parentesco');
echo $this->form->input('direccion');
echo $this->form->input('contraseña');
echo $this->form->input('pregunta');
echo $this->form->input('respuesta');
echo $this->form->input('celular');
echo $this->form->input('email');
echo $this->form->input('estudiante_id');

?>
</fieldset>
</a>
<?php echo $this->form->end('Agregar');?>