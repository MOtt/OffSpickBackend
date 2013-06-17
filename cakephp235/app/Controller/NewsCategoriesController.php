<?php
App::uses('AppController', 'Controller');
/**
 * NewsCategories Controller
 *
 * @property NewsCategory $NewsCategory
 */
class NewsCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NewsCategory->recursive = 0;
		$this->set('newsCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NewsCategory->exists($id)) {
			throw new NotFoundException(__('Ungültige Kategorie'));
		}
		$options = array('conditions' => array('NewsCategory.' . $this->NewsCategory->primaryKey => $id));
		$this->set('newsCategory', $this->NewsCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NewsCategory->create();
			if ($this->NewsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('Die Kategorie wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Die Kategorie konnte nicht gespeichert werden. Bitte nochmals probieren.'));
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
		if (!$this->NewsCategory->exists($id)) {
			throw new NotFoundException(__('Ungültige Kategorie'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NewsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('Die Kategorie wurde gespeichert'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Die Kategorie konnte nicht gespeichert werden. Bitte nochmals probieren.'));
			}
		} else {
			$options = array('conditions' => array('NewsCategory.' . $this->NewsCategory->primaryKey => $id));
			$this->request->data = $this->NewsCategory->find('first', $options);
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
		$this->NewsCategory->id = $id;
		if (!$this->NewsCategory->exists()) {
			throw new NotFoundException(__('Ungültige Kategorie'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->NewsCategory->delete()) {
			$this->Session->setFlash(__('Kategorie gelöscht'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kategorie wurde nicht gelöscht'));
		$this->redirect(array('action' => 'index'));
	}
}
