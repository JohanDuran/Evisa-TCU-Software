<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecurrentData Controller
 *
 * @property \App\Model\Table\RecurrentDataTable $RecurrentData
 */
class RecurrentDataController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Datasets']
        ];
        $recurrentData = $this->paginate($this->RecurrentData);

        $this->set(compact('recurrentData'));
        $this->set('_serialize', ['recurrentData']);
    }

    /**
     * View method
     *
     * @param string|null $id Recurrent Data id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recurrentData = $this->RecurrentData->get($id, [
            'contain' => ['Datasets']
        ]);

        $this->set('recurrentData', $recurrentData);
        $this->set('_serialize', ['recurrentData']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recurrentData = $this->RecurrentData->newEntity();
        if ($this->request->is('post')) {
            $recurrentData = $this->RecurrentData->patchEntity($recurrentData, $this->request->data);
            if ($this->RecurrentData->save($recurrentData)) {
                $this->Flash->success(__('The recurrent data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recurrent data could not be saved. Please, try again.'));
        }
        $datasets = $this->RecurrentData->Datasets->find('list', ['limit' => 200]);
        $this->set(compact('recurrentData', 'datasets'));
        $this->set('_serialize', ['recurrentData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recurrent Data id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recurrentData = $this->RecurrentData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recurrentData = $this->RecurrentData->patchEntity($recurrentData, $this->request->data);
            if ($this->RecurrentData->save($recurrentData)) {
                $this->Flash->success(__('The recurrent data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recurrent data could not be saved. Please, try again.'));
        }
        $datasets = $this->RecurrentData->Datasets->find('list', ['limit' => 200]);
        $this->set(compact('recurrentData', 'datasets'));
        $this->set('_serialize', ['recurrentData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recurrent Data id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recurrentData = $this->RecurrentData->get($id);
        if ($this->RecurrentData->delete($recurrentData)) {
            $this->Flash->success(__('The recurrent data has been deleted.'));
        } else {
            $this->Flash->error(__('The recurrent data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
