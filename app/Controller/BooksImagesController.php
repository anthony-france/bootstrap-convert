<?php
App::uses('AppController', 'Controller');
/**
 * BooksImages Controller
 *
 * @property BooksImage $BooksImage
 */
class BooksImagesController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BooksImage->recursive = 2;
		$booksImages = $this->paginate();
		$this->set('booksImages', $booksImages);
		$this->set('_serialize', 'booksImages');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BooksImage->id = $id;
		if (!$this->BooksImage->exists()) {
			throw new NotFoundException(__('Invalid books image'));
		}
		
		$this->set('booksImage', $this->BooksImage->read(null, $id));
		$this->set('_serialize', 'booksImage');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BooksImage->create();
			if ($this->BooksImage->save($this->request->data)) {
				$this->Session->setFlash(__('The books image has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The books image could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$books = $this->BooksImage->Book->find('list');
		$images = $this->BooksImage->Image->find('list');
		$this->set(compact('books', 'images'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BooksImage->id = $id;
		if (!$this->BooksImage->exists()) {
			throw new NotFoundException(__('Invalid books image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BooksImage->save($this->request->data)) {
				$this->Session->setFlash(__('The books image has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The books image could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->BooksImage->read(null, $id);
		}
		$books = $this->BooksImage->Book->find('list');
		$images = $this->BooksImage->Image->find('list');
		$this->set(compact('books', 'images'));
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
		$this->BooksImage->id = $id;
		if (!$this->BooksImage->exists()) {
			throw new NotFoundException(__('Invalid books image'));
		}
		if ($this->BooksImage->delete()) {
			$this->Session->setFlash(__('Books image deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Books image was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
