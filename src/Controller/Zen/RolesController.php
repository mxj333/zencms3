<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;

class RolesController extends AppController {

	public function initialize() {
		parent::initialize();
		
		// Allow full access to this controller
		$this->Auth->allow();
	}

	public function index() {

        $action = $this->Crud->action();
        // //不显示的字段
        $action->config('scaffold.fields_blacklist', ['created', 'modified']);
        return $this->Crud->execute();

    }

    public function add() {

        $action = $this->Crud->action();
        // //不显示的字段
        $action->config('scaffold.fields_blacklist', ['created', 'modified']);
        return $this->Crud->execute();

    }
}