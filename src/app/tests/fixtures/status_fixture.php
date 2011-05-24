<?php
/* Status Fixture generated on: 2011-05-23 18:04:29 : 1306191869 */
class StatusFixture extends CakeTestFixture {
	var $name = 'Status';
	var $import = array('model' => 'Status');

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'label' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'label' => 'Active'
		),
		array(
			'id' => 2,
			'label' => 'Inactive'
		),
	);
}
?>
