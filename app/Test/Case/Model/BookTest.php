<?php
App::uses('Book', 'Model');

/**
 * Book Test Case
 *
 */
class BookTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.book', 'app.image', 'app.books_image', 'app.tag', 'app.document', 'app.documents_tag', 'app.images_tag');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Book = ClassRegistry::init('Book');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Book);

		parent::tearDown();
	}

}
