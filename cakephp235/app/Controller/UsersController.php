<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	
	public function beforeFilter() {
    parent::beforeFilter();
	$this->set('authUser', $this->Auth->user());
  //  $this->Auth->allow('add'); // Letting users register themselves
	}

	public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Ungültiger Benutzername oder Passwort, bitte nochmals eingeben'));
       	 }
   	 }
	}

public function logout() {
    $this->redirect($this->Auth->logout());
}

	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Ungültiger Benutzer'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Benutzer wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Benutzer wurde nicht gespeichert. Bitte nochmals versuchen'));
			}
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Ungültiger Benutzer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Benutzer wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Benutzer wurde nicht gespeichert. Bitte nochmals versuchen'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$userGroups = $this->User->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Ungültiger Benutzer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Benutzer gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Benutzer wurde gelöscht'));
		$this->redirect(array('action' => 'index'));
	}
}
