<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Cache\Cache;

class AppController extends \Cake\Controller\Controller {

    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        //$this->loadComponent('Auth');

        //设置前台布局
        $this->viewBuilder()->layout('home');
    }

    public function beforeRender(Event $event) {
        parent::beforeRender($event);
        // $this->Auth->allow(['index', 'view', 'display']);       
    }
}