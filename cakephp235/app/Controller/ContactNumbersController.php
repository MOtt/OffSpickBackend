<?php
App::uses('AppController', 'Controller');
/**
 * ContactNumbers Controller
 *
 * @property ContactNumber $ContactNumber
 */
class ContactNumbersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactNumber->recursive = 0;
		$this->set('contactNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact number'));
		}
		$options = array('conditions' => array('ContactNumber.' . $this->ContactNumber->primaryKey => $id));
		$this->set('contactNumber', $this->ContactNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactNumber->create();
			if ($this->ContactNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact number could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->ContactNumber->Contact->find('list');
		$this->set(compact('contacts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContactNumber->exists($id)) {
			throw new NotFoundException(__('Invalid contact number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The contact number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactNumber.' . $this->ContactNumber->primaryKey => $id));
			$this->request->data = $this->ContactNumber->find('first', $options);
		}
		$contacts = $this->ContactNumber->Contact->find('list');
		$this->set(compact('contacts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContactNumber->id = $id;
		if (!$this->ContactNumber->exists()) {
			throw new NotFoundException(__('Invalid contact number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactNumber->delete()) {
			$this->Session->setFlash(__('Contact number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
