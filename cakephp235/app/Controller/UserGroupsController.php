<?php
App::uses('AppController', 'Controller');
/**
 * UserGroups Controller
 *
 * @property UserGroup $UserGroup
 */
class UserGroupsController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserGroup->recursive = 0;
		$this->set('userGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserGroup->exists($id)) {
			throw new NotFoundException(__('Ungültige Benutzergruppe'));
		}
		$options = array('conditions' => array('UserGroup.' . $this->UserGroup->primaryKey => $id));
		$this->set('userGroup', $this->UserGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserGroup->create();
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('Benutzergruppe wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Benutzergruppe wurde gespeichert. Bitte nochmals probieren.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserGroup->exists($id)) {
			throw new NotFoundException(__('Ungültige Benutzergruppe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('Benutzergruppe wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Benutzergruppe wurde gespeichert. Bitte nochmals probieren.'));
			}
		} else {
			$options = array('conditions' => array('UserGroup.' . $this->UserGroup->primaryKey => $id));
			$this->request->data = $this->UserGroup->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserGroup->id = $id;
		if (!$this->UserGroup->exists()) {
			throw new NotFoundException(__('Ungültige Benutzergruppe'));
		}
		$this->UserGroup->read(null, $id);
	if (count($this->UserGroup->data['User']) > 0){
		$this->Session->setFlash(__('Gruppe nicht gelöscht. Es sind noch User in dieser Gruppe!'));
			$this->redirect(array('action' => 'index'));	
	}
		
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserGroup->delete()) {
			$this->Session->setFlash(__('Benutzergruppe wurde gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Benutzergruppe wurde nicht gelöscht'));
		$this->redirect(array('action' => 'index'));
	}
}
