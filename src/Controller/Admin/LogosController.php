<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class LogosController extends AppController {



    public function add() {
        $this->viewBuilder()->setLayout('admin');
        $existingLogoQuery = $this->Logos->find('all');
        $existingLogo = $existingLogoQuery->first();
        $id = $existingLogo['id'];
        $logo = $this->Logos->get($id);
        if($this->request->is(['patch', 'post', 'put'])) {
            $imageData = $this->request->getData();
            $imageData['photo']['name'] = "logo." . pathinfo($imageData['photo']['name'], PATHINFO_EXTENSION);
            $logo = $this->Logos->patchEntity($logo, $imageData);
            if ($this->Logos->save($logo)) {
                $this->Flash->success(__('The logo has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The logo could not be saved. Please, try again.'));
        }
        $this->set(compact('logo'));
    }


}



