<?php
namespace App\Controller;

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
        $userId = $this->request->session()->read('Auth.User.id');
        $supplements = $this->UserSupplements->find('all', [
                                    'contain'=>[
                                        'Supplements'
                                    ],
                                    'conditions'=>[
                                        'UserSupplements.user_id = ' => $userId,
                                        'UserSupplements.is_active = ' => '1'
                                    ]
        ]);

        $userSupplements = $supplements->toArray();

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
    public function add()
    {
        $userSupplement = $this->UserSupplements->newEntity();
        if ($this->request->is('post')) {
            $userSupplement = $this->UserSupplements->patchEntity($userSupplement, $this->request->getData());
            if ($this->UserSupplements->save($userSupplement)) {
                $this->Flash->success(__('The user supplement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user supplement could not be saved. Please, try again.'));
        }
        $users = $this->UserSupplements->Users->find('list', ['limit' => 200]);
        $supplements = $this->UserSupplements->Supplements->find('list', ['limit' => 200]);
        $this->set(compact('userSupplement', 'users', 'supplements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Supplement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userSupplement = $this->UserSupplements->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userSupplement = $this->UserSupplements->patchEntity($userSupplement, $this->request->getData());
            if ($this->UserSupplements->save($userSupplement)) {
                $this->Flash->success(__('The user supplement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user supplement could not be saved. Please, try again.'));
        }
        $users = $this->UserSupplements->Users->find('list', ['limit' => 200]);
        $supplements = $this->UserSupplements->Supplements->find('list', ['limit' => 200]);
        $this->set(compact('userSupplement', 'users', 'supplements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Supplement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userSupplement = $this->UserSupplements->get($id);
        if ($this->UserSupplements->delete($userSupplement)) {
            $this->Flash->success(__('The user supplement has been deleted.'));
        } else {
            $this->Flash->error(__('The user supplement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function userSupplement()
    {
        $userId = $this->request->session()->read('Auth.User.id');
        $supplements = $this->UserSupplements->find('all', [
                                    'contain'=>['Supplements'],
                                    'conditions'=>[
                                        'UserSupplements.user_id = ' => $userId
                                    ]
        ]);

        $supplements = $supplements->toArray();

        $this->set(compact('supplements'));
    }
}
