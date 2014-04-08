<?php
class User extends AppModel {
	//public $name = 'User';
	public $displayField = 'name';
	public $validate = array(
		'name'=>array(
			'Ingrese su nombre'=>array(
				'rule'=>'notEmpty',
				'message'=>'Por favor ingrese su nombre'
				)
			),
		'nombre'=>array(
			'El nombre debe ser entre 5 a 15 letras'=>array(
				'rule'=>array('between',5,15),
				'message'=>'El nombre debe ser entre 5 a 15 letras'
				),
			'El nombre de usuario ya ha sido utilizado'=>array(
				'rule'=>'isUnique',
				'message'=>'El nombre de usuario ya ha sido utilizado'
				)
			),
		'email'=>array(
			'Correo valido'=>array(
				'rule'=>array('email'),
				'message'=>'Por favor ingrese un correo valido'
				)
			)
		);

}
?>