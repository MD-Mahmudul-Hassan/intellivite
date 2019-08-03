<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * SupplementTypes Controller
 *
 * @property \App\Model\Table\SupplementTypesTable $SupplementTypes
 *
 * @method \App\Model\Entity\SupplementType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplementTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->viewBuilder()->setLayout('admin');
        $supplementTypes = $this->paginate($this->SupplementTypes);
        $this->set(compact('supplementTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplement Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplementType = $this->SupplementTypes->get($id, [
            'contain' => ['Supplements']
        ]);

        $this->set('supplementType', $supplementType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $supplementType = $this->SupplementTypes->newEntity();
        if ($this->request->is('post')) {
            $supplementType = $this->SupplementTypes->patchEntity($supplementType, $this->request->getData());
            if ($this->SupplementTypes->save($supplementType)) {
                $this->Flash->success(__('The supplement type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement type could not be saved. Please, try again.'));
        }
        $this->set(compact('supplementType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplement Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $supplementType = $this->SupplementTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplementType = $this->SupplementTypes->patchEntity($supplementType, $this->request->getData());
            if ($this->SupplementTypes->save($supplementType)) {
                $this->Flash->success(__('The supplement type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplement type could not be saved. Please, try again.'));
        }
        $this->set(compact('supplementType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplement Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $supplementType = $this->SupplementTypes->get($id);
        if ($this->SupplementTypes->delete($supplementType)) {
            $this->Flash->success(__('The supplement type has been deleted.'));
        } else {
            $this->Flash->error(__('The supplement type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
