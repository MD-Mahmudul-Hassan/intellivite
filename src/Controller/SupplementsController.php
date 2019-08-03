<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Supplements Controller
 *
 * @property \App\Model\Table\SupplementsTable $Supplements
 *
 * @method \App\Model\Entity\Supplement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SupplementTypes']
        ];
        $supplements = $this->paginate($this->Supplements);

        $this->set(compact('supplements'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplement = $this->Supplements->get($id, [
            'contain' => ['SupplementTypes', 'SupplementReports', 'UserSupplements']
        ]);

        $this->set('supplement', $supplement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplement = $this->Supplements->newEntity();
        if ($this->request->is('post')) {
            $supplement = $this->Supplements->patchEntity($supplement, $this->request->getData());
            if ($this->Supplements->save($supplement)) {
                $this->Flash->success(__('The supplement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement could not be saved. Please, try again.'));
        }
        $supplementTypes = $this->Supplements->SupplementTypes->find('list', ['limit' => 200]);
        $this->set(compact('supplement', 'supplementTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplement = $this->Supplements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplement = $this->Supplements->patchEntity($supplement, $this->request->getData());
            if ($this->Supplements->save($supplement)) {
                $this->Flash->success(__('The supplement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement could not be saved. Please, try again.'));
        }
        $supplementTypes = $this->Supplements->SupplementTypes->find('list', ['limit' => 200]);
        $this->set(compact('supplement', 'supplementTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplement = $this->Supplements->get($id);
        if ($this->Supplements->delete($supplement)) {
            $this->Flash->success(__('The supplement has been deleted.'));
        } else {
            $this->Flash->error(__('The supplement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
