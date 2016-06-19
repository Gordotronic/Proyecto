<h3>Editar</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador editar tabla colegio
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<a>
<?php echo $this->form->create('colegio');?>
<fieldset>
<?php
echo $this->form->input('id');
echo $this->form->input('codigonit');
echo $this->form->input('nombre');
echo $this->form->input('direccion');
echo $this->form->input('telefono');
echo $this->form->input('pagina_web');
echo $this->form->input('email');
echo $this->form->input('jornada');
echo $this->form->input('calendario');
echo $this->form->input('forma_pago');
echo $this->form->input('transporte');

echo $this->form->input('estudiante_id');
?>
</fieldset>
</a>
<?php echo $this->form->end('Guardar Cambios');?>




