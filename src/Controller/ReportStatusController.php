<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReportStatus Controller
 *
 * @property \App\Model\Table\ReportStatusTable $ReportStatus
 *
 * @method \App\Model\Entity\ReportStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportStatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $reportStatus = $this->paginate($this->ReportStatus);

        $this->set(compact('reportStatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Report Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportStatus = $this->ReportStatus->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('reportStatus', $reportStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportStatus = $this->ReportStatus->newEntity();
        if ($this->request->is('post')) {
            $reportStatus = $this->ReportStatus->patchEntity($reportStatus, $this->request->getData());
            if ($this->ReportStatus->save($reportStatus)) {
                $this->Flash->success(__('The report status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The report status could not be saved. Please, try again.'));
        }
        $users = $this->ReportStatus->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportStatus', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportStatus = $this->ReportStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportStatus = $this->ReportStatus->patchEntity($reportStatus, $this->request->getData());
            if ($this->ReportStatus->save($reportStatus)) {
                $this->Flash->success(__('The report status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The report status could not be saved. Please, try again.'));
        }
        $users = $this->ReportStatus->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportStatus', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportStatus = $this->ReportStatus->get($id);
        if ($this->ReportStatus->delete($reportStatus)) {
            $this->Flash->success(__('The report status has been deleted.'));
        } else {
            $this->Flash->error(__('The report status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
