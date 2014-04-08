<div class="users index">
	<h2>Users</h2>
	<table cellpadding="0" cellspacing ="0">
	<tr> 
		<th>id</th>
		<th>nombre</th>
		<th>nombrelargo</th>
		<th>email</th>
		<th class="actions"> Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if($i++ % 2==0){
			$class = 'class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['nombre']; ?>&nbsp;</td>
		<td><?php echo $user['User']['nombrelargo']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Ver',array('action'=>'view',$user['User']['id'])); ?>
			<?php echo $this->Html->link('Editar',array('action'=>'edit',$user['User']['id'])); ?>
			<?php echo $this->Form->postLink('Eliminar',array('action'=>'delete',$user['User']['id']), array('confirmacion'=>'Esta seguro de eliminar?')); ?>
		</td>
	</tr>
<?php endforeach;?>
	</table>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Nueva Grupo Empresa', array('action'=>'add')); ?></li>
	</ul>	
</div>