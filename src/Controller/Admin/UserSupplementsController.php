<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserSupplements Controller
 *
 * @property \App\Model\Table\UserSupplementsTable $UserSupplements
 *
 * @method \App\Model\Entity\UserSupplement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserSupplementsController extends AppController
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
        $userSupplements = $this->paginate($this->UserSupplements);

        $this->set(compact('userSupplements'));
    }

    /**
     * View method
     *
     * @param string|null $id User Supplement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userSupplement = $this->UserSupplements->get($id, [
            'contain' => ['Users', 'Supplements']
        ]);

        $this->set('userSupplement', $userSupplement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $userSupplement = $this->UserSupplements->newEntity();
        if ($this->request->is('post')) {
            $userSupplement = $this->UserSupplements->patchEntity($userSupplement, $this->request->getData());
            $userSupplement['user_id'] = $this->request->getData('user_id');
            if ($this->UserSupplements->save($userSupplement)) {
                $this->Flash->success(__('The user supplement has been saved.'));
            }
            else {
                $this->Flash->error(__('The user supplement could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'edit', 'controller' => 'users', $this->request->getData('user_id')]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User Supplement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->viewBuilder()->setLayout('admin');

        $userSupplement = $this->UserSupplements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userSupplement = $this->UserSupplements->patchEntity($userSupplement, $this->request->getData());
            if ($this->UserSupplements->save($userSupplement)) {
                $this->Flash->success(__('The user supplement has been saved.'));
            }
            else {
                $this->Flash->error(__('The user supplement could not be saved. Please, try again.'));
            }
            return $this->redirect($this->referer());
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id User Supplement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $userSupplement = $this->UserSupplements->get($id);
        if ($this->UserSupplements->delete($userSupplement)) {
            $this->Flash->success(__('The user supplement has been deleted.'));
        } else {
            $this->Flash->error(__('The user supplement could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }

    public function getUserSupplement() {
        $id = $this->request->getData('id');
        $userSupplement = $this->UserSupplements->get($id);
        echo json_encode($userSupplement); exit;
    }
}
