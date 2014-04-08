<div class="users view">
<h2>User</h2>
	<dl><?php $i = 0; $class = 'class ="altrow"';?>
		<dt<?php if ($i % 2 ==0) echo $class;?>>Id</dt>
		<dd<?php if ($i++ % 2 ==0) echo $class;?>>
			<?php echo $user['User']['id'];?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 ==0) echo $class;?>>Nombre</dt>
		<dd<?php if ($i++ % 2 ==0) echo $class;?>>
			<?php echo $user['User']['nombre'];?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 ==0) echo $class;?>>Nombre Largo</dt>
		<dd<?php if ($i++ % 2 ==0) echo $class;?>>
			<?php echo $user['User']['nombrelargo'];?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 ==0) echo $class;?>>Email</dt>
		<dd<?php if ($i++ % 2 ==0) echo $class;?>>
			<?php echo $user['User']['email'];?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Editar',array('action'=> 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink('Eliminar',array('action'=> 'delete', $user['User']['id']),array('Confirmar'=>'Esta seguro de borrar?')); ?></li>
		<li><?php echo $this->Html->link('Mostrar',array('action'=> 'index')); ?> </li>
		<li><?php echo $this->Html->link('Agregar',array('action'=> 'add')); ?> </li>
	</ul>	
</div>
