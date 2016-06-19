<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla colegio
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class colegio extends AppModel{
    
    public $virtualFields = array('virtual_colegio' => 'Colegio.Nombre');
    var $name='colegio';
      public $hasMany = array(
        'estudiante' => array(
            'className' => 'estudiante',
            'foreignKey' => 'colegio_id',
            'conditions' => '',
            'order' => '',
            'limit' => '',
            'dependent' => true
        ),
    
    'grado' => array(
            'className' => 'grado',
            'foreignKey' => 'colegio_id',
            'conditions' => array(''),
            'order' => 'grado.curso DESC',
            'limit' => '',
            'dependent' => true
        ),
     'cupo' => array(
            'className' => 'cupo',
            'foreignKey' => 'colegio_id',
            'conditions' =>'',
            'order' => '',
            'limit' => '',
            'dependent' => true
     ) 
    );
}
   

?>
