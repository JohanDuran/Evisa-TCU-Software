<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleSessions Controller
 *
 * @property \App\Model\Table\PeopleSessionsTable $PeopleSessions
 */
class PeopleSessionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sessions', 'People']
        ];
        $peopleSessions = $this->paginate($this->PeopleSessions);

        $this->set(compact('peopleSessions'));
        $this->set('_serialize', ['peopleSessions']);
    }

    /**
     * View method
     *
     * @param string|null $id People Session id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleSession = $this->PeopleSessions->get($id, [
            'contain' => ['Sessions', 'People']
        ]);

        $this->set('peopleSession', $peopleSession);
        $this->set('_serialize', ['peopleSession']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleSession = $this->PeopleSessions->newEntity();
        if ($this->request->is('post')) {
            $peopleSession = $this->PeopleSessions->patchEntity($peopleSession, $this->request->data);
            if ($this->PeopleSessions->save($peopleSession)) {
                $this->Flash->success(__('The people session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people session could not be saved. Please, try again.'));
        }
        $sessions = $this->PeopleSessions->Sessions->find('list', ['limit' => 200]);
        $people = $this->PeopleSessions->People->find('list', ['limit' => 200]);
        $this->set(compact('peopleSession', 'sessions', 'people'));
        $this->set('_serialize', ['peopleSession']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Session id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleSession = $this->PeopleSessions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleSession = $this->PeopleSessions->patchEntity($peopleSession, $this->request->data);
            if ($this->PeopleSessions->save($peopleSession)) {
                $this->Flash->success(__('The people session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people session could not be saved. Please, try again.'));
        }
        $sessions = $this->PeopleSessions->Sessions->find('list', ['limit' => 200]);
        $people = $this->PeopleSessions->People->find('list', ['limit' => 200]);
        $this->set(compact('peopleSession', 'sessions', 'people'));
        $this->set('_serialize', ['peopleSession']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Session id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleSession = $this->PeopleSessions->get($id);
        if ($this->PeopleSessions->delete($peopleSession)) {
            $this->Flash->success(__('The people session has been deleted.'));
        } else {
            $this->Flash->error(__('The people session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
