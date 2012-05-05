<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tag->recursive = 2;
		$tags = $this->paginate();
		$this->set('tags', $tags);
		$this->set('_serialize', 'tags');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		
		$this->set('tag', $this->Tag->read(null, $id));
		$this->set('_serialize', 'tag');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$documents = $this->Tag->Document->find('list');
		$images = $this->Tag->Image->find('list');
		$this->set(compact('documents', 'images'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->Tag->read(null, $id);
		}
		$documents = $this->Tag->Document->find('list');
		$images = $this->Tag->Image->find('list');
		$this->set(compact('documents', 'images'));
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
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->Tag->delete()) {
			$this->Session->setFlash(__('Tag deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tag was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
