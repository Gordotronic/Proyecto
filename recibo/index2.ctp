<h3>Recibos</h3>
<table>
<thead>
    
<th>Id</th>
<th>Forma de pago</th>
<th>Valor</th>
<th>Cuotas</th>
</thead>
<?php foreach($recibo as $recibos): ?>
<tr>
<td><?php echo $recibos['recibo']['id'] ?></td>
<td><?php echo $recibos['recibo']['forma_de_pago'] ?></td>
<td><?php echo $recibos['recibo']['valor'] ?></td>
<td><?php echo $recibos['recibo']['cuotas'] ?></td>
<td>
    <?php echo $this->html->link('Editar','edit/'.$recibos['recibo']['id']) ?>
    <?php echo $this->html->link('Borrar', array('action'=>'delete',
$recibos['recibo']['id']), null, 'Seguro que quieres borrar?');?>
</td>
</tr>
<?php endforeach; ?>
</table>
<form>
<?php echo $this->html->link('Agregar un nuevo registro','add/'.$recibos['recibo']['id']) ?>
</form>

<?php echo '</br>'; ?>


<form action="matriculas">
<button type="submit">Regresar</button>
</form>