<?php
App::uses('AppController', 'Controller');


/**
 * Infos Controller
 *
 * @property Info $Info
 */
class InfosController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Info->recursive = 0;
		$this->set('infos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Info->exists($id)) {
			throw new NotFoundException(__('Invalid info'));
		}
		$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
		$this->set('info', $this->Info->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Info->create();
			if ($this->Info->save($this->request->data)) {
				$this->Session->setFlash(__('The info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The info could not be saved. Please, try again.'));
			}
		}
		$infoCategories = $this->Info->InfoCategorie->find('list');
		$this->set(compact('infoCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Info->exists($id)) {
			throw new NotFoundException(__('Invalid info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Info->save($this->request->data)) {
				$this->Session->setFlash(__('The info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
			$this->request->data = $this->Info->find('first', $options);
		}
		$infoCategories = $this->Info->InfoCategorie->find('list');
		$this->set(compact('infoCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Info->id = $id;
		if (!$this->Info->exists()) {
			throw new NotFoundException(__('Invalid info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Info->delete()) {
			$this->Session->setFlash(__('Info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
