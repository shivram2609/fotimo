<?php
App::uses('AppController', 'Controller');
/**
 * Dishes Controller
 *
 * @property Dish $Dish
 * @property PaginatorComponent $Paginator
 */
class DishesController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        function beforeFilter() {
            parent::beforeFilter();
            $this->checkAction();
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dish->recursive = 0;
		$this->set('dishes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dish->exists($id)) {
			throw new NotFoundException(__('Invalid dish'));
		}
		$options = array('conditions' => array('Dish.' . $this->Dish->primaryKey => $id));
		$this->set('dish', $this->Dish->find('first', $options));
	}
        
        public function listDish() {
            $options = array("Dish.status"=>1);
            $this->Dish->hasMany = $this->Dish->belongsTo = $this->Dish->hasOne = array();
            $this->Dish->belongsTo = array (
                "DishLocation" => array (
                    "className" => "DishLocation",
                    "foreignKey" => false,
                    "type" => "Inner",
                    "conditions" => "Dish.id = DishLocation.dish_id"
                ),
                "Category" => array (
                    "className" => "Category",
                    "foreignKey" => false,
                    "type" => "Inner",
                    "conditions" => "Dish.category_id = Category.id"
                ),
                "Cuisine" => array (
                    "className" => "Cuisine",
                    "foreignKey" => false,
                    "type" => "Inner",
                    "conditions" => "Dish.cuisine_id = Cuisine.id"
                )
            );
            if ( isset($this->request->query['location_id']) && !empty($this->request->query['location_id']) ) {
               $options = array_merge($options,array("DishLocation.location_id"=>$this->request->query['location_id']));
            }
            
            if ( isset($this->request->query['category_id']) && !empty($this->request->query['category_id']) ) {
               $options = array_merge($options,array("Dish.category_id"=>$this->request->query['category_id']));
            }
            
            if ( isset($this->request->query['cuisine_id']) && !empty($this->request->query['cuisine_id']) ) {
               $options = array_merge($options,array("Dish.cuisine_id"=>$this->request->query['cuisine_id']));
            }
            
            $dishes = $this->Dish->find("all",array("conditions"=>$options,"fields"=>array("Distinct(Dish.id)","Dish.*","Cuisine.type","Category.name")));
            $log = $this->Dish->getDataSource()->getLog(false, false);
            //debug($log);
            $this->loadModel("Location");
            $locations = $this->Location->find("list",array("conditions"=>array("status"=>1)));
            $this->set(compact("locations","dishes"));
        }

/**
 * add method
 *
 * @return void
 */
	public function add() {
            $this->userInfo();
		if ($this->request->is('post')) {
                    $data1 = $this->request->data;
                    for ( $i = 1; $i< 4; $i++ ) {
                        if ( empty($data1['Dish']['img'.$i]['name']) ) {
                            unset($data1['Dish']['img'.$i]);
                        }
                    }
                    $data1['Dish']['user_id'] = $this->Session->read("AuthUser.User.id");
                    $data1['Dish']['start_order_from'] = date("Y-m-d h:i:s",strtotime($data1['Dish']['start_order_from']));
                    $data1['Dish']['end_order_date'] = date("Y-m-d h:i:s",strtotime($data1['Dish']['end_order_date']));
                    $data1['Dish']['delivery_date'] = date("Y-m-d h:i:s",strtotime($data1['Dish']['delivery_date']));
                    $data1['Dish']['delivery_mode'] = $data1['Dish']['delivery_mode'];
                    $data1['Dish']['my_video1'] = $data1['Dish']['my_video1'];
                    //$data1['Dish']['my_video2'] = $data1['Dish']['my_video2'];
                    $temp = $data1['DishLocation']['location_id'];
                    unset($data1['DishLocation']['location_id']);
                    foreach ( $temp as $dishKey=>$dishVal ) {
                        //pr($dishVal);
                        $data1['DishLocation'][]['location_id'] = $dishVal;
                    }
                    //pr($data1);
                   // die;
                   $this->Dish->set($data1);
                    if ( $this->Dish->validates()){
                        $image = array();
                        for ( $i = 0; $i<4; $i++ ) {
                            if ( isset($data1['Dish']['img'.$i]['name']) ) {
                                $image[] = ($this->uploadProductImage($data1['Dish']['img'.$i],"productimg",true))?$this->imagename:'';
                            }
                        }
                        $data1['Dish']['images'] = serialize($image);
			$this->Dish->create();
                        if ($this->Dish->saveAll($data1)){
                            $this->Session->setFlash('The dish has been saved.','default',array("class"=>"success_message"));
                            return $this->redirect(SITE_LINK."add-dishes");
			}else {
                            $this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
                        }
                    } 
                    else {
                        $this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
                    }
                }
		$users = $this->Dish->User->find('list');
		$cuisines = $this->Dish->Cuisine->find('list', array('fields' => array('Cuisine.type')));
		$categories = $this->Dish->Category->find('list');
                $locations = $this->Dish->Location->find('list');
		$this->set(compact('dishes' ,'users', 'cuisines', 'categories','locations'));
	}
 
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dish->exists($id)) {
			throw new NotFoundException(__('Invalid dish'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dish->save($this->request->data)) {
				$this->Session->setFlash(__('The dish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dish.' . $this->Dish->primaryKey => $id));
			$this->request->data = $this->Dish->find('first', $options);
		}
		$users = $this->Dish->User->find('list');
		$cuisines = $this->Dish->Cuisine->find('list');
		$categories = $this->Dish->Category->find('list');
		$this->set(compact('users', 'cuisines', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dish->id = $id;
		if (!$this->Dish->exists()) {
			throw new NotFoundException(__('Invalid dish'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dish->delete()) {
			$this->Session->setFlash(__('The dish has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dish could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
