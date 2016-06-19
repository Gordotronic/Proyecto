<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla matricula
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class matricula extends AppModel{
   var $name='matricula';
  public $hasMany = array(
        'recibos' => array(
            'className' => 'recibos',
            'foreignKey' => 'matricula_id',
            'conditions' => '',
            'order' => '',
            'limit' => '',
            'dependent' => true
        )
      );
    public $belongsTo = array(
        'estudiante' => array(
            'className' => 'estudiante',
            'foreignKey' => 'estudiante_id'
        )
    ); 
}
?>
