<?php
/**
******************************************************
* @file acudiente.php
* @brief  Descripción
* Modelo de la tabla recibo
* @author Karla Fonca
* @version 3.0
* @date Junio 2016

*******************************************************/


/**
******************************************************
 @brief Clase para crear el modelo
 @param esta clase reliza la relacion que tiene la tabla con otras

******************************************************/
class recibo extends AppModel{
   var $name='recibo';
       public $belongsTo = array(
        'matricula' => array(
            'className' => 'matricula',
            'foreignKey' => 'matricula_id',
        )
    );
}
?>
