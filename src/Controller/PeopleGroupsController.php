<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleGroups Controller
 *
 * @property \App\Model\Table\PeopleGroupsTable $PeopleGroups
 */
class PeopleGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Groups']
        ];
        $peopleGroups = $this->paginate($this->PeopleGroups);

        $this->set(compact('peopleGroups'));
        $this->set('_serialize', ['peopleGroups']);
    }

    /**
     * View method
     *
     * @param string|null $id People Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleGroup = $this->PeopleGroups->get($id, [
            'contain' => ['People', 'Groups']
        ]);

        $this->set('peopleGroup', $peopleGroup);
        $this->set('_serialize', ['peopleGroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleGroup = $this->PeopleGroups->newEntity();
        if ($this->request->is('post')) {
            $peopleGroup = $this->PeopleGroups->patchEntity($peopleGroup, $this->request->data);
            if ($this->PeopleGroups->save($peopleGroup)) {
                $this->Flash->success(__('The people group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people group could not be saved. Please, try again.'));
        }
        $people = $this->PeopleGroups->People->find('list', ['limit' => 200]);
        $groups = $this->PeopleGroups->Groups->find('list', ['limit' => 200]);
        $this->set(compact('peopleGroup', 'people', 'groups'));
        $this->set('_serialize', ['peopleGroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Group id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleGroup = $this->PeopleGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleGroup = $this->PeopleGroups->patchEntity($peopleGroup, $this->request->data);
            if ($this->PeopleGroups->save($peopleGroup)) {
                $this->Flash->success(__('The people group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people group could not be saved. Please, try again.'));
        }
        $people = $this->PeopleGroups->People->find('list', ['limit' => 200]);
        $groups = $this->PeopleGroups->Groups->find('list', ['limit' => 200]);
        $this->set(compact('peopleGroup', 'people', 'groups'));
        $this->set('_serialize', ['peopleGroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleGroup = $this->PeopleGroups->get($id);
        if ($this->PeopleGroups->delete($peopleGroup)) {
            $this->Flash->success(__('The people group has been deleted.'));
        } else {
            $this->Flash->error(__('The people group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
