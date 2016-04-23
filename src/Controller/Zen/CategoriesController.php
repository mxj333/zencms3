<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;


class CategoriesController extends AppController {

	public function index() {

        $action = $this->Crud->action();
        // //不显示的字段
        $action->config('scaffold.fields_blacklist', ['created', 'modified']);
        return $this->Crud->execute();

    }
    
}
