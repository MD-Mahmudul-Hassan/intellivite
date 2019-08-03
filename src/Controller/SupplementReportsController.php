<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SupplementReports Controller
 *
 * @property \App\Model\Table\SupplementReportsTable $SupplementReports
 *
 * @method \App\Model\Entity\SupplementReport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplementReportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Supplements']
        ];
        $supplementReports = $this->paginate($this->SupplementReports);

        $this->set(compact('supplementReports'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplement Report id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplementReport = $this->SupplementReports->get($id, [
            'contain' => ['Users', 'Supplements']
        ]);

        $this->set('supplementReport', $supplementReport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplementReport = $this->SupplementReports->newEntity();
        if ($this->request->is('post')) {
            $supplementReport = $this->SupplementReports->patchEntity($supplementReport, $this->request->getData());
            if ($this->SupplementReports->save($supplementReport)) {
                $this->Flash->success(__('The supplement report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement report could not be saved. Please, try again.'));
        }
        $users = $this->SupplementReports->Users->find('list', ['limit' => 200]);
        $supplements = $this->SupplementReports->Supplements->find('list', ['limit' => 200]);
        $this->set(compact('supplementReport', 'users', 'supplements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplement Report id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplementReport = $this->SupplementReports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplementReport = $this->SupplementReports->patchEntity($supplementReport, $this->request->getData());
            if ($this->SupplementReports->save($supplementReport)) {
                $this->Flash->success(__('The supplement report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement report could not be saved. Please, try again.'));
        }
        $users = $this->SupplementReports->Users->find('list', ['limit' => 200]);
        $supplements = $this->SupplementReports->Supplements->find('list', ['limit' => 200]);
        $this->set(compact('supplementReport', 'users', 'supplements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplement Report id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplementReport = $this->SupplementReports->get($id);
        if ($this->SupplementReports->delete($supplementReport)) {
            $this->Flash->success(__('The supplement report has been deleted.'));
        } else {
            $this->Flash->error(__('The supplement report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function userSupplement()
    {
        //
    }

}
