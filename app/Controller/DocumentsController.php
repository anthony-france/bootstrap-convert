<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 */
class DocumentsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Document->recursive = 2;
		$documents = $this->paginate();
		$this->set('documents', $documents);
		$this->set('_serialize', 'documents');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		
		$this->set('document', $this->Document->read(null, $id));
		$this->set('_serialize', 'document');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$tags = $this->Document->Tag->find('list');
		$this->set(compact('tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->Document->read(null, $id);
		}
		$tags = $this->Document->Tag->find('list');
		$this->set(compact('tags'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->Document->delete()) {
			$this->Session->setFlash(__('Document deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
