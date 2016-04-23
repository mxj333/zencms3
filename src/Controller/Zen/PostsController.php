<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;

// use Cake\ORM\Query;
/**
* Posts Controller
*
* @property \App\Model\Table\PostsTable $Posts
*/
class PostsController extends AppController {
    public function index() {
        $action = $this->Crud->action();
        $action->config('scaffold.fields', [
            'first_name',
            'last_name',
            'position',
            'email',
        ]);
        return $this->Crud->execute();
    }
}
