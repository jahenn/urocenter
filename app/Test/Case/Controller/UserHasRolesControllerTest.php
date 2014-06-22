<?php
App::uses('UserHasRolesController', 'Controller');

/**
 * UserHasRolesController Test Case
 *
 */
class UserHasRolesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_has_role',
		'app.user',
		'app.role'
	);

}
