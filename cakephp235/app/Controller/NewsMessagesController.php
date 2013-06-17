<?php
App::uses('AppController', 'Controller');
/**
 * NewsMessages Controller
 *
 * @property NewsMessage $NewsMessage
 */
class NewsMessagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NewsMessage->recursive = 0;
		$this->set('newsMessages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NewsMessage->exists($id)) {
			throw new NotFoundException(__('Ungültiger News-Text'));
		}
		$options = array('conditions' => array('NewsMessage.' . $this->NewsMessage->primaryKey => $id));
		$this->set('newsMessage', $this->NewsMessage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NewsMessage->create();
			if ($this->NewsMessage->save($this->request->data)) {
				$this->Session->setFlash(__('Der News-Eintrag wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Der News-Eintrag konnte nicht gespeichert werden. Bitte nochmals probieren.'));
			}
		}
		$newsCategories = $this->NewsMessage->NewsCategory->find('list');
		$this->set(compact('newsCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->NewsMessage->exists($id)) {
			throw new NotFoundException(__('Ungültige News'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NewsMessage->save($this->request->data)) {
				$this->Session->setFlash(__('Der News-Eintrag wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Der News-Eintrag konnte nicht gespeichert werden. Bitte nochmals probieren.'));
			}
		} else {
			$options = array('conditions' => array('NewsMessage.' . $this->NewsMessage->primaryKey => $id));
			$this->request->data = $this->NewsMessage->find('first', $options);
		}
		$newsCategories = $this->NewsMessage->NewsCategory->find('list');
		$this->set(compact('newsCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->NewsMessage->id = $id;
		if (!$this->NewsMessage->exists()) {
			throw new NotFoundException(__('Ungültige News'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->NewsMessage->delete()) {
			$this->Session->setFlash(__('News wurde gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('News wurde nicht gelöscht'));
		$this->redirect(array('action' => 'index'));
	}
}
