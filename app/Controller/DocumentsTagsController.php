<?php
App::uses('AppController', 'Controller');
/**
 * DocumentsTags Controller
 *
 * @property DocumentsTag $DocumentsTag
 */
class DocumentsTagsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DocumentsTag->recursive = 2;
		$documentsTags = $this->paginate();
		$this->set('documentsTags', $documentsTags);
		$this->set('_serialize', 'documentsTags');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DocumentsTag->id = $id;
		if (!$this->DocumentsTag->exists()) {
			throw new NotFoundException(__('Invalid documents tag'));
		}
		
		$this->set('documentsTag', $this->DocumentsTag->read(null, $id));
		$this->set('_serialize', 'documentsTag');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentsTag->create();
			if ($this->DocumentsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The documents tag has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documents tag could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$documents = $this->DocumentsTag->Document->find('list');
		$tags = $this->DocumentsTag->Tag->find('list');
		$this->set(compact('documents', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DocumentsTag->id = $id;
		if (!$this->DocumentsTag->exists()) {
			throw new NotFoundException(__('Invalid documents tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The documents tag has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documents tag could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->DocumentsTag->read(null, $id);
		}
		$documents = $this->DocumentsTag->Document->find('list');
		$tags = $this->DocumentsTag->Tag->find('list');
		$this->set(compact('documents', 'tags'));
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
		$this->DocumentsTag->id = $id;
		if (!$this->DocumentsTag->exists()) {
			throw new NotFoundException(__('Invalid documents tag'));
		}
		if ($this->DocumentsTag->delete()) {
			$this->Session->setFlash(__('Documents tag deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Documents tag was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
