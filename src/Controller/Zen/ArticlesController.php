<?php
namespace App\Controller\Zen;
use App\Controller\Zen\AppController;
// use Cake\I18n\Time;


class ArticlesController extends AppController {


	// public function index() {
 //        $action = $this->Crud->action();
 //        $action->config('scaffold.fields', [
 //            'title'
 //        ]);
 //        return $this->Crud->execute();
 //    }

    // public function add() {
    //     $action = $this->Crud->action();
    //     $action->config('scaffold.fields', [
    //     	'title',
    //         'body',
    //         'files' => ['type' => 'file']
    //     ]);
    //     return $this->Crud->execute();
    // }

    // public function index() {
    //     $this->set('articles', $this->Articles->find('all'));
    // }
    public function index() {

        $action = $this->Crud->action(); // Gets the IndexAction object


        //格式化字段
        /*
        $action->config('scaffold.fields', [
            'title',
            'thread_id' => [
                'type' => 'text'
            ],
            'featured' => [
                'checked' => 'checked'
            ]
        ]);
        */
        // $action->config('scaffold.fields', [
        //     'published_time' => [
        //         'formatter' => 'element',
        //         'element' => 'search/published_time',
        //         'action' => 'index'
        //     ]
        // ]);

        //显示的字段
        //$action->config('scaffold.fields', ['title', 'category']);

        //debug($action->config()); // Show all configuration related to this action

        //例如你可能不打算将关联的信息显示在索引列表中:
        //$action->config('scaffold.relations_blacklist', ['Categories']);

        //显示关联的信息在索引列表中:
        //$action->config('scaffold.relations', ['Categories']);

        // //不显示的字段
        $action->config('scaffold.fields_blacklist', ['body', 'created', 'modified']);

        //不显示删除按钮
        $action->config('scaffold.actions_blacklist', ['delete']);

        //显示的操作
        //$action->config('scaffold.actions', ['view', 'add', 'edit']);

        //或者,您可以使用该插件的Crud的方法beforePaginate改变包含函数列表中的分页查询:
        /*
        $this->Crud->on('beforePaginate', function ($event) {
            $paginationQuery  = $event->subject()->query;
            $paginationQuery->contain([
                'Categories' => ['fields' => ['id', 'name']]
            ]);
        });
        */


        return $this->Crud->execute();
    }

    public function view($id) {
        $action = $this->Crud->action();

        $action->config('scaffold.fields', ['title', 'body', 'category']);

        $action->config('scaffold.fields_blacklist', ['created', 'modified']);

        //不显示关联
        //$action->config('scaffold.relations_blacklist', ['Categories']);

        return $this->Crud->execute();
    }

    public function add(){

        $action = $this->Crud->action();

        //设置placeholder 提示信息
        $action->config('scaffold.fields', [
            'title' => ['placeholder' => 'Insert a title here'],
            'body',
            'category_id'
        ]);

        $action->config('scaffold.fields_blacklist', ['created', 'modified']);


        //如果您想要改变使用的查询的关联。特别是,您可以使用relatedModels事件:
        $this->Crud->on('relatedModel', function(\Cake\Event\Event $event) {
            if ($event->subject->association->name() === 'Categories') {
                $event->subject->query->limit(1);
                // $event->subject->query->where(['is_active' => true]);
            }
        });

        //禁用多余的提交按钮
        //$action->config('scaffold.disable_extra_buttons', true);

        $action->config('scaffold.extra_buttons_blacklist', [
            'save_and_continue', // Hide the Save and Continue button
            'save_and_create', // Hide the Save and create new button
            //'back', // Hide the back button
        ]);
        return $this->Crud->execute();
    }


    public function edit() {
        $action = $this->Crud->action();
        $action->config('scaffold.fields', ['title', 'body', 'category_id']);
        return $this->Crud->execute();
    }


}