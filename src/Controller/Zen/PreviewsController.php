<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;

/**
 * Previews Controller
 *
 * @property \App\Model\Table\PreviewsTable $Previews
 */
class PreviewsController extends AppController {

    public function index() {
        $action = $this->Crud->action();
        $action->config('scaffold.fields', [
            'p_name',
            'p_rate',
            // 'p_date' => [
            //     'formatter' => function ($name, Time $value) {
            //         // return $value->nice();
            //     }
            // ],
        ]);
        return $this->Crud->execute();
    }

    public function add(){ 
        
        $action = $this->Crud->action();
        
        //设置placeholder 提示信息
        $action->config('scaffold.fields', [
            'title' => ['placeholder' => 'Insert a title here'],
            'p_body' => ['id' => 'body']
        ]);

        // $action->config('scaffold.fields_blacklist', ['created', 'modified']);
           

        //如果您想要改变使用的查询的关联。特别是,您可以使用relatedModels事件:
        // $this->Crud->on('relatedModel', function(\Cake\Event\Event $event) {
        //     if ($event->subject->association->name() === 'Categories') {
        //         $event->subject->query->limit(1);
        //         // $event->subject->query->where(['is_active' => true]);
        //     }
        // });

        //禁用多余的提交按钮
        $action->config('scaffold.disable_extra_buttons', true);

        // $action->config('scaffold.extra_buttons_blacklist', [
        //     'save_and_continue', // Hide the Save and Continue button
        //     'save_and_create', // Hide the Save and create new button
        //     //'back', // Hide the back button
        // ]);
        return $this->Crud->execute();
    }

}
