<?php
App::uses('AppController', 'Controller');
/**
 * InfoCategories Controller
 *
 * @property InfoCategory $InfoCategory
 */
class InfoCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InfoCategory->recursive = 0;
		$this->set('infoCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InfoCategory->exists($id)) {
			throw new NotFoundException(__('Invalid info category'));
		}
		$options = array('conditions' => array('InfoCategory.' . $this->InfoCategory->primaryKey => $id));
		$this->set('infoCategory', $this->InfoCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InfoCategory->create();
			if ($this->InfoCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The info category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The info category could not be saved. Please, try again.'));
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
		if (!$this->InfoCategory->exists($id)) {
			throw new NotFoundException(__('Invalid info category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InfoCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The info category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The info category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InfoCategory.' . $this->InfoCategory->primaryKey => $id));
			$this->request->data = $this->InfoCategory->find('first', $options);
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
		$this->InfoCategory->id = $id;
		if (!$this->InfoCategory->exists()) {
			throw new NotFoundException(__('Invalid info category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InfoCategory->delete()) {
			$this->Session->setFlash(__('Info category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Info category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
