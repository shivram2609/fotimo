<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property UserType $UserType
 * @property CookRating $CookRating
 * @property DishRating $DishRating
 * @property Dish $Dish
 * @property TrackOrder $TrackOrder
 * @property UserDetail $UserDetail
 */
class User extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'UserType' => array(
			'className' => 'UserType',
			'foreignKey' => 'user_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CookRating' => array(
			'className' => 'CookRating',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DishRating' => array(
			'className' => 'DishRating',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Dish' => array(
			'className' => 'Dish',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TrackOrder' => array(
			'className' => 'TrackOrder',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserDetail' => array(
			'className' => 'UserDetail',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	public $validate = array (
		"name" => array (
			"notempty" => array (
				"rule" => "notempty",
				"message" => "Please enter your name."
			)
		),
		"email" => array (
			"notempty" => array (
				"rule" => "notempty",
				"message" => "Please enter email."
			),
			"isUnique" => array (
				"rule" => "isUnique",
				"message" => "This email is already registered, Please try another one."
			)
		),
		"user_type_id" => array (
			"rule" => "notempty",
			"message" => "Please select user type."
		),
		'currentpassword'=>array(
			'notempty'=>array(
				'rule'=>'notempty',
				'message'=>'Please enter old password.'
			),
			'checkoldpassword'=>array(
				'rule'=>'checkoldpassword',
				'message'=>'Current password is not correct.'
			)
		),
                'user_slug' => array(
                    "notempty" => array (
                        "rule" => "notEmpty",
                        "message" => "Slug can not be leave blank."
                    ),
                    "isUnique" => array (
                       "rule" => "isUnique",
                       "message" => "This slug is already used, Please try another one."
                    )
                ),
		'password'=>array(
			'notempty'=>array(
				'rule'=>'notempty',
				'message'=>'Please enter password.'
			),
			'minlength'=>array(
				'rule'=>array('minlength',5),
				'message'=>'Password size min 6 chracters.'
			),
			'maxlength'=>array(
				'rule'=>array('maxlength',15),
				'message'=>'Password size max 15 chracters.'
			)
		),
		'newpassword'=>array(
			'notempty'=>array(
				'rule'=>'notempty',
				'message'=>'Please enter password.'
			),
			'minlength'=>array(
				'rule'=>array('minlength',5),
				'message'=>'Password size min 6 chracters.'
			),
			'maxlength'=>array(
				'rule'=>array('maxlength',15),
				'message'=>'Password size max 15 chracters.'
			)
		),
		'confirmpassword'=>array(
			'notempty'=>array(
				'rule'=>'notempty',
				'message'=>'Please enter confirm password.'
			),
			'confirmpassword'=>array(
				'rule'=>'confirmpassword',
				'message'=>'Password and Confirm password do not match.'
			)
		)
	);
	
	function confirmpassword() {
		$value = $this->data['User']['newpassword'];
                $confirmPassword = $this->data['User']['confirmpassword'];
		if ( $value == $confirmPassword) {
		  return true;
		} else {
		  return false;
		}
	}
	
	function checkoldpassword() {
            	$this->recursive = -1;
		$user = $this->find("first",array("conditions"=>array("User.id"=>$this->data['User']['id'],"User.password"=>$this->data['User']['encOldPassword'])));
		if (empty($user)) {
			return false;
		} else {
			return true;
		}
	}
}
