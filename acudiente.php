<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla acudientes
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class acudiente extends AppModel{
   public $virtualFields = array('virtual_acudiente' => 'Acudiente.Nombre');
   var $name='acudiente';
public $hasAndBelongsToMany = array(
        'estudiantes' =>
            array(
                'className' => 'estudiantes',
                'joinTable' => 'acudientes_estudiantes',
                'foreignKey' => 'acudiente_id',
                'associationForeignKey' => 'estudiante_id',
                'unique' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => 'acudientes_estudiantes'
            )
    );

}
?>