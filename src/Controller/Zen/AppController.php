<?php
namespace App\Controller\Zen;

use Cake\Controller\Controller;
// use Cake\Controller\Component\CookieComponent;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Cache\Cache;
use Cake\I18n\I18n;

class AppController extends \Cake\Controller\Controller {
    use \Crud\Controller\ControllerTrait;

    public $components = [
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];


    public function initialize() {
        parent::initialize();

        I18n::locale('zh_CN');

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->viewClass = 'CrudView\View\CrudView';

        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                // 'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete',
                'Crud.Lookup',
            ],
            'listeners' => [
                // New listeners that need to be added:
                'CrudView.View',
                'Crud.Redirect',
                'Crud.RelatedModels',
                'CrudView.Search',
            ]
        ]);

        $this->loadComponent(
            'Auth', [
                //'authorize' => 'Controller',
                'authorize' => [
                    'Acl.Actions' => ['actionPath' => 'controllers/']
                ],
                'loginAction' => [
                    'plugin' => false,
                    'controller' => 'Users',
                    'action' => 'login',
                    'prefix' => 'zen'
                ],
                
                'loginRedirect' => [
                    'plugin' => false,
                    // 'prefix' => 'zen',
                    'controller' => 'index',
                    'action' => 'index'
                ],
                'logoutRedirect' => [
                    'plugin' => false,
                    'prefix' => 'zen',
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'unauthorizedRedirect' => [
                    'controller' => 'Home',
                    'action' => 'index',
                    'prefix' => false,
                    'prefix' => false
                ],
                'authError' => 'Did you really think you are allowed to see that?',
                'flash' => [
                    'element' => 'error'
                ],
                'storage' => 'Session'
        ]);

        $this->loadComponent(
            'Auth', [
                'authenticate' => [
                    'FOC/Authenticate.Cookie' => [
                        'fields' => [
                            'username' => 'username',
                            'password' => 'password'
                        ],
                        'userModel' => 'Users',
                        'scope' => ['User.active' => 1],
                    ],
                    'FOC/Authenticate.MultiColumn' => [
                        'fields' => [
                            'username' => 'username',
                            'password' => 'password'
                        ],
                        'columns' => ['username', 'email'],
                        'userModel' => 'Users',
                        'scope' => ['Users.active' => 1]
                    ],
                    'FOC/Authenticate.Token' => [
                        'parameter' => '_token',
                        'header' => 'X-MyApiTokenHeader',
                        'userModel' => 'Users',
                        'scope' => ['Users.active' => 1],
                        'fields' => [
                            'username' => 'username',
                            'password' => 'password',
                            'token' => 'public_key',
                        ],
                        'continue' => true
                    ]
                ]
            ]
        );

    }

    //在视图呈现之前,调用控制器操作逻辑。
    public function beforeRender(Event $event) {
        parent::beforeRender($event);


        // $this->Cookie->httpOnly = true;
        // $cookie = $this->Cookie->read('RememberMe');
        // debug($cookie);
        // debug($this->Auth->user());


        //自动登录.
        // if (!$this->Auth->user() && $this->Cookie->read('RememberMe')) {
        // if ($user = $this->Cookie->read('RememberMe')) {

            // $user = $this->Auth->identify();
            // debug($user);
            // if ($user) {
            //     // $this->Auth->setUser($user);
            // } else {
            //     // $this->Cookie->delete('RememberMe');
            // }
        // }



        // $this->Auth->allow(['index', 'view', 'display']);

        //后台结构
        if (($structures = Cache::read('structures')) === false) {
            $this->loadModel('Structures');
            $structures = json_encode($this->Structures->all());
            Cache::write('structures', $structures);
        }

        //后台菜单
        if (($managements = Cache::read('managements')) === false) {
            $this->loadModel('Managements');
            $_managements = $this->Managements->all();
            foreach ($_managements as $key => $value) {
                $data[$value['structure_id']][] = $value;
            }
            $managements = json_encode($data);
            Cache::write('managements', $managements);
        }

        //选中当前并赋值给视图
        $controllerName = ($this->request->params['controller']);
        $ZEN_MEUN = ZEN_MEUN($structures, $managements, $controllerName);
        $bannerActive = isset($ZEN_MEUN['bannerActive']) ? intval($ZEN_MEUN['bannerActive']) : 1;
        
        //面包宵
        $breadcrumb = breadcrumb($ZEN_MEUN, $bannerActive, $controllerName, 1);
        
        $this->set(compact('ZEN_MEUN', 'bannerActive', 'controllerName', 'breadcrumb'));        
    }

    //简单的授权或您需要使用模型和组件的组合来做您的授权，是否允许用户访问请求的资源,
    public function isAuthorized($user = null) {

        //任何注册用户都可以访问公共功能
        if (empty($this->request->params['prefix'])) {
            return true;
        }

        //只有管理员可以访问管理功能
        if ($this->request->params['prefix'] === 'zen') {
            return (bool)($user['role_id'] === 1);
        }

        //默认拒绝
        return false;
    }
}