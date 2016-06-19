<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla estudiante
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class estudiante extends AppModel{
  public $virtualFields = array('virtual_estudiante' => 'Estudiante.Nombre',);
   var $name='estudiante';
      public $hasOne = array(
        'historiasacademica' => array(
            'className' => 'historiasacademica',
            'conditions' => array('historiasacademica.id' => '1'),
            'dependent' => true
        )
    );
  
public $hasAndBelongsToMany = array(
        'acudientes' =>
            array(
                'className' => 'acudientes',
                'joinTable' => 'acudientes_estudiantes',
                'foreignKey' => 'estudiante_id',
                'associationForeignKey' => 'acudiente_id',
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
     public $hasMany = array(
        'matriculas' => array(
            'className' => 'matriculas',
            'foreignKey' => 'estudiante_id',
            'conditions' => '',
            'order' => '',
            'limit' => '',
            'dependent' => true
        )
    );

  public $belongsTo = array(
        'colegio' => array(
            'className' => 'colegio',
            'foreignKey' => 'colegio_id'
        )
    ); 
   
}
?>
