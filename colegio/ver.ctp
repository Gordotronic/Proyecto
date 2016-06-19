<!-- 
*@file index.ctp
*@brief  Descripción
* vista del controlador editar tabla colegio
* @author Karla Fonca
* @version 3.0
* @date Junio 2016 -->

<div class="page-header">
<h3>Detalles del colegio <?php echo $colegio['colegio']['nombre']; ?> </h3>
</div>

<tr>
    <div class="vistas" id="vistas">
    <td>
        <h2><font color="Blue"><?php echo __('Codigo/Nit'); ?></font></h2>
        <h4><?php echo $colegio['colegio']['codigonit']; ?> </h4>
    </td>
    <td>
        <h2><font color="Blue"><?php echo __('Direccion'); ?></font></h2>
        <h4><?php echo $colegio['colegio']['direccion']; ?> </h4>
    </td>
    <td>
        <h2><font color="Blue"><?php echo __('Telefono'); ?></font></h2>
        <h4><?php echo $colegio['colegio']['telefono']; ?></h4>
    </td>
    <td>
        <h2><font color="Blue"><?php echo __('Pagina Web'); ?></font></h2>
        <h4><?php echo $colegio['colegio']['pagina_web']; ?></h4>
    </td>
    </div>
</tr>

<h4>
<?php echo $this->Html->link('Volver a la lista de colegio',array('controller' => 'colegios','action' =>'index'));?>
<h4>



