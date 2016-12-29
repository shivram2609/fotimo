<?php
App::uses('AppModel', 'Model');
/**
 * Dish Model
 *
 * @property User $User
 * @property Cuisine $Cuisine
 * @property Category $Category
 * @property DishRating $DishRating
 * @property Order $Order
 */
class Dish extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'is_deleted' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
		),
		'is_locked' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
		),
                'cuisine_id' => array(
                        'cuisine_id' => array(
                        'rule' => "notBlank",
                        'message' =>   "Please choose cuisine name first.",
                        ),
                ),
                'category_id' => array(
                        'category_id' => array(
                        'rule' => "notBlank",
                        'message' =>   "Please choose category first.",
                        ),
                ),
                'name' => array(
                        'name' => array(
                        'rule' => "notBlank",
                        'message' =>   "Please choose name first.",
                        ),
                ),
                'price' => array(
                        'price'  => array(
                        'rule' => "numeric",
                        'message' =>   "Please Enter numeric value for price.",  
                        ) 
                ),
                'img0' => array (
                    "img0" =>array (
                        'rule' => array('extension',array('jpeg','jpg','png')),
                        'allowEmpty' => false,
                        'message' => 'Select valid image(Choose only jpeg,jpg or png image)',
                    )
                ),
                'img1' => array (
                    "img1" =>array ( 
                        'rule' => array('extension',array('jpeg','jpg','png')),
                        'allowEmpty' => true,
                        'message' => 'Select valid image(Choose only jpeg,jpg or png image)',
                    )
                ),
                'img2' => array (
                    "img2" =>array (
                        'rule' => array('extension',array('jpeg','jpg','png')),
                        'allowEmpty' => true,
                        'message' => 'Select valid image(Choose only jpeg,jpg or png image)',
                    )
                ),
                'img3' => array (
                    "img3" =>array (
                        'rule' => array('extension',array('jpeg','jpg','png')),
                        'allowEmpty' => true,
                        'message' => 'Select valid image(Choose only jpeg,jpg or png image)',
                    )
                )
                );
 
//        function chkImages() {
//            $img = $this->data['Dish']['images'];
//            foreach( $img as $v ) {
//                if ( !empty($v['name']) ) {
//                    $extArr = explode(".",$v['name']);
//                    $ext = strtolower(end($extArr));
//                    pr($ext);exit;
//                    if ( !in_array($ext,array("jpg","jpeg","png")) ) {
//                        return false;
//                    }else {
//                        return true;
//                    }
//                }
//            }
//        }
        
    

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
		'Cuisine' => array(
			'className' => 'Cuisine',
			'foreignKey' => 'cuisine_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
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
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DishRating' => array(
			'className' => 'DishRating',
			'foreignKey' => 'dish_id',
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
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'dish_id',
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
                'DishLocation' => array (
                    'className' => 'DishLocation',
                    'foreignKey' => 'dish_id',
                    'dependent' => true
                )
	);

}
