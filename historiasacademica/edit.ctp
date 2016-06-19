<!-- 
*@file index.ctp
*@brief  Descripción
vista del controlador editar tabla historias academicas
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->
<h3>Editar Historia academica </h3>
<a>
    <?php echo $this->form->create('historias_academica');?>
<fieldset>
<?php
echo $this->form->input('id');
echo "</br>";
echo "Fecha de ingreso del estudiante(AAAA-MM-DD)";
echo $this->form->date('fecha_de_ingreso');
echo "</br>";
echo "Fecha de salida del estudiante(AAAA-MM-DD)";
echo $this->form->date('fecha_de_salida');
echo $this->form->input('anterior_colegio');
echo $this->form->input('estudiante_id');
?>

</fieldset>
</a>
<?php echo $this->Form->end('Salvar');?>

