<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class UsersController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'limit' =>  10
        ];
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function dashboard() {
        $this->viewBuilder()->setLayout('admin');
        $me = 'Dashboard';
        $this->set(compact('me'));
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('admin_login');
        if($this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if($user['role'] !== 1) {
                    return $this->Flash->error(__('Sorry. You are not allowed to access this location.'));
                }
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else {
               $this->Flash->error(__('Invalid email and/or password. Please try again.'));
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function edit($id = null) {
        $this->viewBuilder()->setLayout('admin');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $questionnairesQuery = $this->Users->Questionaires->find('all', [
            'conditions' => ['user_id' => $id]
        ]);
        if(!empty($questionnairesQuery->first())) {
            $questionnaires = $questionnairesQuery->first()->toArray();
            $health_goals = json_decode($questionnaires['health_goals'], true);
            $about_you = json_decode($questionnaires['about_you'], true);
        }
        $states = $this->Users->getStatesList();
        $supplements = $this->Users->UserSupplements->Supplements->find('list')->toArray();
        $userSupplements = $this->Users->UserSupplements->find('all', [
            'conditions' => ['user_id' => $id],
            'contain' => ['supplements']
        ]);
        $this->set(compact('user', 'states', 'health_goals', 'about_you', 'supplements', 'userSupplements'));
    }

    public function download($id = null) {
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait'
            ]
        ]);
        $questionnaires = $this->Users->Questionaires->find('all', [
            'conditions' => ['user_id' => $id],
            'contain' => ['users']
        ]);
        $healthGoals = $aboutYou = "";
        $filename = $this->generateFilename($id);
        if(!empty($questionnaires->first())) {
            $questionnaires = $questionnaires->first()->toArray();
            $healthGoals = json_decode($questionnaires['health_goals'], true);
            $aboutYou = json_decode($questionnaires['about_you'], true);
        }
        $this->RequestHandler->renderAs($this, 'pdf', ['attachment' => $filename]);
        $this->set(compact('healthGoals', 'aboutYou'));
    }

    public function generateFilename($id) {
        $filename = "data_";
        $userInformation = $this->Users->get($id);
        if(!empty($userInformation['first_name'])) {
            $filename .= $userInformation['first_name'] . "_";
        }
        if(!empty($userInformation['last_name'])) {
            $filename .= $userInformation['last_name'];
        }
        $filename .= ".pdf";
        return $filename;
    }

    public function delete($id = null) {
        $user = $this->Users->get($id);
        $user->is_active = 0;
        if($this->Users->save($user)) {
            $this->Flash->success("User has been marked inactive.");
        }
        else {
            $this->Flash->error("Sorry. There was a problem updating user status. Please try again");
        }
        return $this->redirect(['action' => 'index']);
    }


}

?>
