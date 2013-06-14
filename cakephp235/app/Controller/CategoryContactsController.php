<?php
App::uses('AppController', 'Controller');
/**
 * CategoryContacts Controller
 *
 * @property CategoryContact $CategoryContact
 */
class CategoryContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoryContact->recursive = 0;
		$this->set('categoryContacts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoryContact->exists($id)) {
			throw new NotFoundException(__('Invalid category contact'));
		}
		$options = array('conditions' => array('CategoryContact.' . $this->CategoryContact->primaryKey => $id));
		$this->set('categoryContact', $this->CategoryContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoryContact->create();
			if ($this->CategoryContact->save($this->request->data)) {
				$this->Session->setFlash(__('The category contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category contact could not be saved. Please, try again.'));
			}
		}
		$categories = $this->CategoryContact->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoryContact->exists($id)) {
			throw new NotFoundException(__('Invalid category contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoryContact->save($this->request->data)) {
				$this->Session->setFlash(__('The category contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoryContact.' . $this->CategoryContact->primaryKey => $id));
			$this->request->data = $this->CategoryContact->find('first', $options);
		}
		$categories = $this->CategoryContact->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoryContact->id = $id;
		if (!$this->CategoryContact->exists()) {
			throw new NotFoundException(__('Invalid category contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoryContact->delete()) {
			$this->Session->setFlash(__('Category contact deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Category contact was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
