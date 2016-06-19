<h3>Editar</h3>
<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador editar tabla grado
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<a>
<?php echo $this->form->create('grado');?>
<fieldset>
<?php
echo $this->form->input('id');
echo $this->form->input('curso');
echo $this->form->input('año');
echo "</br>";
echo "Fecha de inscripcion(AAAA-MM-DD)";
echo "</br>";
echo $this->form->date('fecha_de_inscripcion');
echo "</br>";
echo "Fecha de limite inscripcion(AAAA-MM-DD)";
echo $this->form->date('fecha_limite_inscripcion');
echo "</br>";
echo $this->form->input('colegio_id');
echo $this->form->input('historia_academica_id');
?>
</fieldset>
</a>
<?php echo $this->Form->end('Salvar');?>


