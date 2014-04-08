<?php
class UsersController extends AppController {

	public $name = 'Users';
	public function index(){
		$this->User->recursive=0;
		$this->set('users',$this->User->find('all'));

	}
	public function view($id=null) {
		$this->User->id = $id;
		if (!$this->User->exists()){
			throw new NotFoundException('Usuario invalido');
		}
		if(!$id){
			$this->Session->setFlash('Usuario invalido');
			$this->redirect(array('action'=>'index'));

		}
		$this->set('user',$this->User->read());

	}
	public function add(){
		if($this->request->is('post')){
		
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('El usuario ha sido guardado');
				$this->redirect(array('action'=>'index'));

			}
			else {
				$this->Session->setFlash('El usuario no ha sido guardado, Intente otra vez');
			}
		}

	}
	public function edit($id=null){
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException('Usuario invalido');
		}
		if( $this->request->is('post') || $this->request->is('put') ){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('El usuario ha sido guardado');
				$this->redirect(array('action'=>'index'));

			}
			else {
				$this->Session->setFlash('El usuario no ha sido guardado, Intente otra vez');
			}
		}
		else{
			$this->request->data=$this->User->read();
		}
	}
	public function delete($id=null){
		if($this->request->is('get')) {
			throw new MethodNotAllowedException();

		}
		if(!$id) {
			$this->Session->setFlash('ID invalido');
			$this->redirect(array('action'=>'index'));
		}
		if($this->User->delete($id)){
				$this->Session->setFlash('El usuario ha sido borrado');
				$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('El usuario no se ha borrado');
		$this->redirect(array('action'=>'index'));
	}
}
?>