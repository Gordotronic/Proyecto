<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador añadir tabla cupo
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->


<?php echo $this->form->create('cupo');?>
<a>
<fieldset>
<legend>Ingrese los cupos disponibles</legend><?php
echo $this->form->input('preescolar');
echo $this->form->input('primero');
echo $this->form->input('segundo');
echo $this->form->input('tercero');
echo $this->form->input('cuarto');
echo $this->form->input('quinto');
echo $this->form->input('sexto');
echo $this->form->input('septimo');
echo $this->form->input('octavo');
echo $this->form->input('noveno');
echo $this->form->input('decimo');
echo $this->form->input('undecimo');
echo $this->form->input('colegio_id');


?></fieldset>
</a>
<?php echo $this->form->end('Agregar');?>
