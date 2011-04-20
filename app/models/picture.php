<?php
class Picture extends AppModel {
	var $name = 'Picture';
	var $displayField = 'filename';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
  
  var $actsAs = array(
    'MeioUpload.MeioUpload' => array('filename'=>array(
        'dir'=>'img/projects/',
        'allowed_mime'=> array('image/jpeg', 'image/pjpeg', 'image/png');
        'allowed_ext'=>array('.jpg', '.jpeg', '.png'),
      ),
    ),
  );
    

	var $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
