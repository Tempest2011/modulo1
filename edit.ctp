<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Registrar Grupo Empresa</legend>
		<?php 
			echo $this->Form->input('nombre');
			echo $this->Form->input('nombrelargo');
			echo $this->Form->input('email');
		?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
	<div class="actions">
		<h3>Actions</h3>
		<ul>
			<li><?php echo $this->Html->link('Ver Lista', array('action'=>'index'));?></li>
		</ul>
</div>