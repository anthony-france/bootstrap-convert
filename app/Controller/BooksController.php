<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 */
class BooksController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Book->recursive = 2;
		$books = $this->paginate();
		$this->set('books', $books);
		$this->set('_serialize', 'books');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		
		$this->set('book', $this->Book->read(null, $id));
		$this->set('_serialize', 'book');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$images = $this->Book->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->request->data = $this->Book->read(null, $id);
		}
		$images = $this->Book->Image->find('list');
		$this->set(compact('images'));
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
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('Book deleted'), 'default', null, 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Book was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
	}

}
