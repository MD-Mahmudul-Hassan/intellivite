<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Core\Configure;
use Cake\Utility\Security;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Orders', 'Questionaires', 'ReportStatus', 'SupplementReports']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($id != $this->request->session()->read('Auth.User.id')) {
            $this->Flash->error(__('Sorry. You are not authorized to access this location'));
            return $this->redirect(['action' => 'dashboard']);
        }
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            /*Check if form submitted from change-password section, to show model validations in view.*/
            if(isset($this->request->data['change_password'])) {
                if (!empty($this->request->data)) {
                    $user = $this->Users->patchEntity($user, [
                            'current_password'  => $this->request->data['current_password'],
                            'password'      => $this->request->data['new_password'],
                            'new_password'     => $this->request->data['new_password'],
                            'confirm_password'     => $this->request->data['confirm_password']
                        ],
                        ['validate' => 'password']
                    );
                    if ($this->Users->save($user)) {
                        $this->Flash->success('The password is changed successfuly.');
                        return $this->redirect($this->referer());

                    } else {
                        $this->Flash->error('Sorry. The password could be changed. Please try again.');
                    }
                }
            }
            /*Form submitted from Basic info or Shipping info section.*/
            else {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Your details has been updated successfuly.'));
                    return $this->redirect($this->referer());
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $states = $this->Users->getStatesList();
        $this->set(compact('user', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Checkout page
     */
    public function checkout()
    {
        $users = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($users, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Please fill up the form properly.'));
            }
        }
        $states = $this->Users->getStatesList();

        $this->set(compact('users', 'states'));
    }
    /**
     * User Login
     */
    public function login()
    {
        $user = $this->Users->newEntity();
        $this->viewBuilder()->layout('user-login');
        if ($this->request->is('post')) {
            $email = $this->request->data['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->error('Your username or password is incorrect.');
                }
            } else {
                $this->Flash->error('Invalid email address. Please check.');
            }
        }
        $this->set(compact('user'));
    }

    /**
     * User logout
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * User Dashboard
     */
    public function dashboard()
    {
        //
    }

    /**
     * Forgot password
     */
    public function forgotPassword()
    {
        $user = $this->Users->newEntity();
        $this->viewBuilder()->layout('user-login');
        if ($this->request->is('post')) {
            $email = $this->request->data['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $userExists = $this->Users->checkIfEmailExists($email);
                if ($userExists) {
                    $results = $this->Users->updateToken($email);
                    if (!empty($results)) {
                        $sentMail = $this->_sendResetTokenToUser($results);
                        if ($sentMail) {
                            return $this->redirect(['action' => 'token']);
                        }
                    }
                } else {
                    $this->Flash->error("Email could not be found! Please check and try again. ");
                }
            } else {
                $this->Flash->error('Invalid email address. Please check.');
            }
        }

        $this->set(compact('user'));
    }

    /**
     * Token handling
     */
    public function token()
    {
        $user = $this->Users->newEntity();
        $this->viewBuilder()->layout('user-login');
        if ($this->request->is('post')) {
            $userToken = $this->request->data['reset_password_token'];
            $idHash = $this->Users->matchToken($userToken);
            if ($idHash) {
                return $this->redirect(['action' => 'newPassword', $idHash]);
            } else {
                $this->Flash->error(__('Token did not matched. Please try again.'));
            }
        }
        $this->set(compact('user'));
    }

    /**
     * Password Reset
     */
    public function newPassword($idHash = null)
    {
        $userId = $this->Users->getUserId($idHash);
        $user = $this->Users->get($userId);
        $this->viewBuilder()->layout('user-login');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user->password = $this->request->data['password'];
            $user = $this->Users->patchEntity($user, ['validate' => 'password']);
            if ($this->Users->save($user)) {
                $this->Users->cleanUpHash($userId);
                $this->Flash->success(__('Password updated successfully'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('Sorry. Password could not be changed.'));
            }
        }
        $this->set(compact('user'));
    }

    /**
     * Send email
     */
    private function _sendResetTokenToUser($results)
    {
        $user = $this->Users->get($results['user_id'], ['fields' => ['first_name', 'last_name', 'email']]);

        $message = "Hi ".$user['first_name']." ".$user['last_name']."<br>";
        $message.= "We have received a request to reset your passowrd. Here is your token: <strong>".$results['token']."</strong>";
        $message.= "<br><br>Thank you.";

        $adminEmail = Configure::read('AdminEmail.email_address');
        $email = new Email();
        $email->from([$adminEmail => 'IntelliVite'])
            ->to($user['email'])
            ->emailFormat('html')
            ->subject('IntelliVite - Reset Password')
            ->send($message);

        return true;
    }


}
