<?php
App::uses('AppController', 'Controller');
/**
 * InfoMessages Controller
 *
 * @property InfoMessage $InfoMessage
 */
class InfoMessagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InfoMessage->recursive = 0;
		$this->set('infoMessages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InfoMessage->exists($id)) {
			throw new NotFoundException(__('Ungültiger Info-Text'));
		}
		$options = array('conditions' => array('InfoMessage.' . $this->InfoMessage->primaryKey => $id));
		$this->set('infoMessage', $this->InfoMessage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InfoMessage->create();
			if ($this->InfoMessage->save($this->request->data)) {
				$this->Session->setFlash(__('Die Info wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Die Info konnte nicht gespeichert werden. Bitte erneut versuchen'));
			}
		}
		$infoCategories = $this->InfoMessage->InfoCategory->find('list');
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
		if (!$this->InfoMessage->exists($id)) {
			throw new NotFoundException(__('Ungültiger Info-Text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InfoMessage->save($this->request->data)) {
				$this->Session->setFlash(__('Die Info wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Die Info konnte nicht gespeichert werden. Bitte erneut versuchen'));
			}
		} else {
			$options = array('conditions' => array('InfoMessage.' . $this->InfoMessage->primaryKey => $id));
			$this->request->data = $this->InfoMessage->find('first', $options);
		}
		$infoCategories = $this->InfoMessage->InfoCategory->find('list');
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
		$this->InfoMessage->id = $id;
		if (!$this->InfoMessage->exists()) {
			throw new NotFoundException(__('Ungültiger Info-Text'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InfoMessage->delete()) {
			$this->Session->setFlash(__('Info wurde gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Info konnte nicht gelöscht werden'));
		$this->redirect(array('action' => 'index'));
	}
}
