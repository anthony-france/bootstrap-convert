<?php
App::uses('Image', 'Model');

/**
 * Image Test Case
 *
 */
class ImageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.image', 'app.book', 'app.books_image', 'app.tag', 'app.document', 'app.documents_tag', 'app.images_tag');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Image = ClassRegistry::init('Image');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Image);

		parent::tearDown();
	}

}