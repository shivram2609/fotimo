<?php
App::uses('AppModel', 'Model');
/**
 * UserDetail Model
 *
 * @property User $User
 * @property Location $Location
 */
class UserDetail extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
//	var $validate = array (
//		"title" => array (
//			"rule" => "notEmpty",
//			"message" => "Please select title.",
//		)
//	);
        
        
    public $validate = array(
        'title' => array(
           "rule" => "notEmpty",
            "message" => "Please select title.", 
        ),
        'first_name' => array(
            'rule' => "notEmpty",
            'message' =>   "Please enter name first.", 
        ),
        'location_id' => array(
            'rule' => "notEmpty",
            'message' =>   "Please enter location here.", 
        ),
        'address' => array (
            "rule" => "notEmpty",
            "message" => "Please enter address.", 
        ),
          'image' => array(
            'rule' => array('extension',array('jpeg','jpg','png')),
            'allowEmpty' => true,
            'message' => 'Select valid image(Choose only jpeg,jpg or png image)',
        )
    );

}
