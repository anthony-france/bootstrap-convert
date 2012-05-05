<?php
App::uses('AppController', 'Controller');
/**
 * Images Controller
 *
 * @property Image $Image
 */
class ImagesController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Image->recursive = 2;
		$images = $this->paginate();
		$this->set('images', $images);
		$this->set('_serialize', 'images');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		
		$this->set('image', $this->Image->read(null, $id));
		$this->set('_serialize', 'image');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Image->create();
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$books = $this->Image->Book->find('list');
		$tags = $this->Image->Tag->find('list');
		$this->set(compact('books', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Image->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->Image->read(null, $id);
		}
		$books = $this->Image->Book->find('list');
		$tags = $this->Image->Tag->find('list');
		$this->set(compact('books', 'tags'));
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
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->Image->delete()) {
			$this->Session->setFlash(__('Image deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Image was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
