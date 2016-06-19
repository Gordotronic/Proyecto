<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla cupo
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class cupo extends AppModel{
    public $virtualFields = array('virtual_cupo' => 'Cupo.Id');
   var $name='cupo';
       public $belongsTo = array(
        'colegios' => array(
            'className' => 'colegios',
            'foreignKey' => 'colegio_id'
        )
    );
}
?>