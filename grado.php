<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla grado
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class grado extends AppModel{
   var $name='grado';
       public $belongsTo = array(
        'colegios' => array(
            'className' => 'colegios',
            'foreignKey' => 'colegio_id'
        )
    );
}
?>