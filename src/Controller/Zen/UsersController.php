<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;

use Cake\I18n\Time;
use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Cake\I18n\I18n;

class UsersController extends AppController {

    public $components = ['Cookie'];

    public function initialize() {
        parent::initialize();
        // use \Cake\Core\Exception\Exception;
        
        
        //是否已经登录
        // if ($this->Auth->user()) {
            // return $this->redirect($this->Auth->redirectUrl());
        // }

    }

    public function beforeFilter(\Cake\Event\Event $event) {
               
        $this->Auth->allow(['login', 'add', 'logout']);
        parent::beforeFilter($event);
   }

    public function index() {

        $action = $this->Crud->action();

        //不显示的字段
        $action->config('scaffold.fields_blacklist', ['password', 'created', 'modified']);
    //     $action->config('scaffold.fields', [
    //         'username',
    //         'role_id',
    //         'active',
    //         'created' => [
    //             'formatter' => function ($name, $value, $entity) {
    //                 return $value->nice();
    //             }
    //         ],
    //     ]);
        return $this->Crud->execute();
    }


    public function login() {
               
        //布局设置
        $this->viewBuilder()->layout('ajax');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                //设置cookie
                $this->_setCookie();               
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                // $this->Cookie->delete('RememberMe');
                $this->Flash->error(__('Username or password is incorrect'), [
                    'key' => 'auth'
                ]);
            }
        }

        //自动登录
        if (empty($this->data)) {
            $cookie = $this->Cookie->read('RememberMe');
            $this->request->data = $cookie;
            if (!is_null($cookie)) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Cookie->destroy('RememberMe');
                    $this->Session->setFlash('Invalid cookie');
                    // $this->redirect('login');
                }
            }

        }
    }

    public function logout() {
        $this->Cookie->delete('RememberMe');
        $this->Flash->success(__('Good-Bye'));
        return $this->redirect($this->Auth->logout());
    }

    //设置Cookie
    protected function _setCookie() {
        if (!$this->request->data('remember_me')) {
            return false;
        }
        $data = [
            'username' => $this->request->data('username'),
            'password' => $this->request->data('password')
        ];
        $this->Cookie->write('RememberMe', $data, true, '+1 week');
        unset($this->request->data['remember_me']);
        return true;
    }


}
