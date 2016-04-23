<?php
namespace App\Controller\Api;
use App\Controller\AppController;

class ArticlesController extends AppController {


	// public function index() {
 //        $action = $this->Crud->action();
 //        $action->config('scaffold.fields', [
 //            'title'
 //        ]);
 //        return $this->Crud->execute();
 //    }

    public function add() {
        $action = $this->Crud->action();
        $action->config('scaffold.fields', [
        	'title',
            'body'
        ]);
        return $this->Crud->execute();
    }


    public function view($id) {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }


}