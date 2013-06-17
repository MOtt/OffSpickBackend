<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Ungültiger Kontakt'));
		}
		$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
		$this->set('contact', $this->Contact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('Der Kontakt wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Der Kontakt wurde nicht gespeichert. Bitte nochmals probieren.'));
			}
		}
/*		$categoryContacts = $this->Contact->CategoryContact->find('list');
	*/	$contactNumbers = $this->Contact->ContactNumber->find('list');
		$this->set(compact('categoryContacts', 'contactNumbers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Ungültiger Kontakt'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('Der Kontakt wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Der Kontakt wurde nicht gespeichert. Bitte nochmals probieren.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
		}
		$categoryContacts = $this->Contact->CategoryContact->find('list');
		$contactNumbers = $this->Contact->ContactNumber->find('list');
		$this->set(compact('categoryContacts', 'contactNumbers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Ungültiger Kontakt'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('Kontakt wurde gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kontakt wurde nicht gelöscht'));
		$this->redirect(array('action' => 'index'));
	}
}
