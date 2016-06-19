<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla historias academicas
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class historias_academica extends AppModel{
   var $name='historias_academica';
       public $belongsTo = array(
        'estudiante' => array(
            'className' => 'estudiante',
            'foreignKey' => 'estudiante_id',
        )
    );
}
?>
