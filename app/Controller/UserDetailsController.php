<?php
App::uses('AppController', 'Controller');
/**
 * UserDetails Controller
 *
 * @property UserDetail $UserDetail
 * @property PaginatorComponent $Paginator
 */
class UserDetailsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserDetail->recursive = 0;
		$this->set('userDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserDetail->exists($id)) {
			throw new NotFoundException(__('Invalid user detail'));
		}
		$options = array('conditions' => array('UserDetail.' . $this->UserDetail->primaryKey => $id));
		$this->set('userDetail', $this->UserDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserDetail->create();
			if ($this->UserDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The user detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user detail could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserDetail->User->find('list');
		$locations = $this->UserDetail->Location->find('list');
		$this->set(compact('users', 'locations'));
	}
        
        /*------------google API -----------------*/
         
        public function getLnt($zip = null){
            $this->userInfo();
            $output = array();
            $this->autoRender = false;
            $zip = $this->request->data['zip'];
            $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($zip)."&sensor=false";
            $result_string = file_get_contents($url);
            $result = json_decode($result_string, true);
            if($result['results'][0]['address_components'][0]['types'][0] === "postal_code"){
                foreach($result['results'][0]['address_components'] as $r){
                        if($r['types'][0] == "administrative_area_level_1"){
                                $output['state'] = $r['long_name'];
                                $output['latitude']= $result['results'][0]['geometry']['location']['lat'];
                                $output['longitude']= $result['results'][0]['geometry']['location']['lng'];
                        }
                        if($r['types'][0] == "locality"){
                             $output['city'] = $r['long_name'];
                        }
                    }
            }else{
                    echo "no postal code find";
            }
            header("Content-Type: application/json", true);
            echo json_encode($output);
            exit;
        }
        
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit() {
            $this->userInfo();
            $id = $this->Session->read("AuthUser.UserDetail.id");
            $this->loadModel("User");
		if (!$this->UserDetail->exists($id)) {
			throw new NotFoundException(__('Invalid user detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data1 = $this->request->data;
                        //pr($data1);
                        $data1['UserDetail']['image'] =(empty($this->request->data['UserDetail']['image']['name'])?'':$this->request->data['UserDetail']['image']['name']);
			if ( !empty($this->request->data['UserDetail']['image']['name']) ) {
				$oldImage = !empty($this->request->data['UserDetail']['old_image'])?$this->request->data['UserDetail']['old_image']:'';
				$this->request->data['UserDetail']['image'] = ($this->uploadProductImage($this->request->data['UserDetail']['image'],"profileimg",true,$oldImage))?$this->imagename:$this->request->data['UserDetail']['old_image'];
			//die("here");
                        } else {
                            //die("there");
				$this->request->data['UserDetail']['image'] = $this->request->data['UserDetail']['old_image'];
			}
                        if ( !empty($data1['User']['currentpassword']) || !empty($data1['User']['newpassword']) || !empty($data1['User']['confirmpassword']) ) {
                            $this->processChangepassword($data1);
                        }
                        unset($data1['User']['currentpassword']);
                        unset($data1['User']['newpassword']);
                        unset($data1['User']['confirmpassword']);
			$data = $this->request->data;
			$this->User->set($data1['User']);
                        $this->UserDetail->set($data1['UserDetail']);
                        $flag1 = $flag2 = false;
                        if ( $this->User->validates() ) {
                            $flag1 = true;
                        }
                        if ($this->UserDetail->validates()) {
                            $flag2 = true;
                        }
			if ( $flag1 && $flag2 ) {
				$data['UserDetail']['details'] = base64_encode(serialize(array("description"=>$data['UserDetail']['description'],"image"=>$data['UserDetail']['image']))); 
                                /*update userdetail according to session value*/
                                $this->Session->write("AuthUser.UserDetail.details",$data['UserDetail']['details']);
                                $this->User->hasMany = $this->User->hasOne = $this->User->belongsTo = array();
                                $this->User->hasOne = array(
                                        "UserDetail" => array (
                                                "className" => "UserDetail",
                                                "foreignKey" => "user_id",
                                                "type" => "Inner"
                                        )
                                );
                                $this->User->create();
                                $this->User->id = $data['User']['id'];
                                if ($this->User->saveAll($data,array("validate"=>false))) {
                                        //pr($data);
					$this->Session->setFlash('The user detail has been saved.','default',array("class"=>"success_message"));
					return $this->redirect(SITE_LINK."edit-profile");
				} else {
					$this->Session->setFlash(__('The user detail could not be saved. Please, try again.'));
				}
			}
		} else {
                        $options = array('conditions' => array('UserDetail.' . $this->UserDetail->primaryKey => $id),"fields"=>array("User.*","UserDetail.*"));
			$data= $this->User->UserDetail->find('first', $options);
			$tmpData = unserialize(base64_decode($data['UserDetail']['details']));
                        //pr($tmpData);exit;
                        if (!empty($tmpData)) { 
                            foreach ( $tmpData as $key=>$val ) {
                                    $data['UserDetail'][$key] = $val;
                            }
                        }
			$this->request->data = $data;
		}
		$locations = $this->UserDetail->Location->find('list',array("conditions"=>array("status"=>1)));
		$this->set(compact('locations'));
	}
        /**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserDetail->id = $id;
		if (!$this->UserDetail->exists()) {
			throw new NotFoundException(__('Invalid user detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserDetail->delete()) {
			$this->Session->setFlash(__('The user detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
