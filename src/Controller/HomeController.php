<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Cache\Cache;

use Cake\Core\Configure;
use Cake\Event\Event;
// use Cake\ORM\Query;
/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class HomeController extends AppController {

	// public $theme = 'Modern';

	// public function beforeFilter(Event $event) {
	public function beforeFilter(\Cake\Event\Event $event) {
    	parent::beforeFilter($event);	
       	$this->viewBuilder()->theme('Modern');
    }

    public function index() {
    	//$this->Crud->action()->disable();
    	// $this->viewBuilder()->layout = 'Home';
        //pr($this->request);
    }
}
