<?php
namespace App\Controller\Zen;

use App\Controller\Zen\AppController;

/**
 * Managements Controller
 *
 * @property \App\Model\Table\ManagementsTable $Managements
 */
class ManagementsController extends AppController {

    public function add() {
        $action = $this->Crud->action();
        $action->config('scaffold.fields', [
            'structure_id' => [
                'type' => 'select'
            ],
            'name',
            'label',
            'icon',
            'url',
            'target',
            'weight',
            'status'    
        ]);
        return $this->Crud->execute();
    }


    /**
     * View method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $management = $this->Managements->get($id, [
            'contain' => ['Structures']
        ]);

        $this->set('management', $management);
        $this->set('_serialize', ['management']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $action = $this->Crud->action();
        $targets = ['_blank' => '_blank', '_self' => '_self', '_parent' => '_parent', '_top' =>'_top'];
        $action->config('scaffold.fields', [
            'structure_id' => [
                'type' => 'select'
            ],
            'name',
            'label',
            'icon',
            'url',
            'target',//=> ['type' => 'select', ['value' => 1]]
            'weight',
            'status' => ['type' => 'checkbox', ['value' => 1]]
        ]);

        return $this->Crud->execute();
    //     $management = $this->Managements->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $management = $this->Managements->patchEntity($management, $this->request->data);
    //         if ($this->Managements->save($management)) {
    //             $this->Flash->success(__('The management has been saved.'));
    //             return $this->redirect(['action' => 'index']);
    //         } else {
    //             $this->Flash->error(__('The management could not be saved. Please, try again.'));
    //         }
    //     }
    //     $structures = $this->Managements->Structures->find('list', ['limit' => 200]);
    //     $this->set(compact('management', 'structures'));
    //     $this->set('_serialize', ['management']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $management = $this->Managements->get($id);
        if ($this->Managements->delete($management)) {
            $this->Flash->success(__('The management has been deleted.'));
        } else {
            $this->Flash->error(__('The management could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
