<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SiteOptions Controller
 *
 * @property \App\Model\Table\SiteOptionsTable $SiteOptions
 *
 * @method \App\Model\Entity\SiteOption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SiteOptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $siteOptions = $this->paginate($this->SiteOptions);

        $this->set(compact('siteOptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Site Option id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $siteOption = $this->SiteOptions->get($id, [
            'contain' => []
        ]);

        $this->set('siteOption', $siteOption);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $siteOption = $this->SiteOptions->newEntity();
        if ($this->request->is('post')) {
            $siteOption = $this->SiteOptions->patchEntity($siteOption, $this->request->getData());
            if ($this->SiteOptions->save($siteOption)) {
                $this->Flash->success(__('The site option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site option could not be saved. Please, try again.'));
        }
        $this->set(compact('siteOption'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Site Option id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $siteOption = $this->SiteOptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $siteOption = $this->SiteOptions->patchEntity($siteOption, $this->request->getData());
            if ($this->SiteOptions->save($siteOption)) {
                $this->Flash->success(__('The site option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site option could not be saved. Please, try again.'));
        }
        $this->set(compact('siteOption'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Site Option id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $siteOption = $this->SiteOptions->get($id);
        if ($this->SiteOptions->delete($siteOption)) {
            $this->Flash->success(__('The site option has been deleted.'));
        } else {
            $this->Flash->error(__('The site option could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
