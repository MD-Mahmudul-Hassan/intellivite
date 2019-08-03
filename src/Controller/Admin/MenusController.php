<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class MenusController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function add() {
        $this->viewBuilder()->setLayout('admin');
        $menu = $this->Menus->newEntity();
        if($this->request->is('post')) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The Menu has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            else {
                $this->Flash->error(__('Sorry. Menu could not be saved.'));
            }
        }
        $pages = $this->Menus->Pages->find('list');
        $parents = $this->Menus->find('list');
        $this->set(compact('pages', 'parents', 'menu'));
    }

    public function index() {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'limit' =>  10
        ];
        $menus = $this->paginate($this->Menus);
        $this->set(compact('menus'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        if ($this->Menus->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function edit($id = null) {
        $this->viewBuilder()->setLayout('admin');

        $menu = $this->Menus->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $pages = $this->Menus->Pages->find('list');
        $parentIds = $this->Menus->find('list');
        $this->set(compact('menu', 'pages', 'parentIds'));
    }

}

