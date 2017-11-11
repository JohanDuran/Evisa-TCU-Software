<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Datasets Controller
 *
 * @property \App\Model\Table\DatasetsTable $Datasets
 */
class DatasetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People']
        ];
        $datasets = $this->paginate($this->Datasets);

        $this->set(compact('datasets'));
        $this->set('_serialize', ['datasets']);
    }

    /**
     * View method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataset = $this->Datasets->get($id, [
            'contain' => ['People', 'RecurrentData']
        ]);

        $this->set('dataset', $dataset);
        $this->set('_serialize', ['dataset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataset = $this->Datasets->newEntity();
        if ($this->request->is('post')) {
            $dataset = $this->Datasets->patchEntity($dataset, $this->request->data);
            if ($this->Datasets->save($dataset)) {
                $this->Flash->success(__('The dataset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dataset could not be saved. Please, try again.'));
        }
        $people = $this->Datasets->People->find('list', ['limit' => 200]);
        $this->set(compact('dataset', 'people'));
        $this->set('_serialize', ['dataset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataset = $this->Datasets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataset = $this->Datasets->patchEntity($dataset, $this->request->data);
            if ($this->Datasets->save($dataset)) {
                $this->Flash->success(__('The dataset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dataset could not be saved. Please, try again.'));
        }
        $people = $this->Datasets->People->find('list', ['limit' => 200]);
        $this->set(compact('dataset', 'people'));
        $this->set('_serialize', ['dataset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataset = $this->Datasets->get($id);
        if ($this->Datasets->delete($dataset)) {
            $this->Flash->success(__('The dataset has been deleted.'));
        } else {
            $this->Flash->error(__('The dataset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
