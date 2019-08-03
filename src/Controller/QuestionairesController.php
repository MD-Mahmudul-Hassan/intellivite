<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionaires Controller
 *
 * @property \App\Model\Table\QuestionairesTable $Questionaires
 *
 * @method \App\Model\Entity\Questionaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionairesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set(compact('questionaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Questionaire id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionaire = $this->Questionaires->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('questionaire', $questionaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionaire = $this->Questionaires->newEntity();
        if ($this->request->is('post')) {
            $questionaire = $this->Questionaires->patchEntity($questionaire, $this->request->getData());
            if ($this->Questionaires->save($questionaire)) {
                $this->Flash->success(__('The questionaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionaire could not be saved. Please, try again.'));
        }
        $users = $this->Questionaires->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionaire', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionaire = $this->Questionaires->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionaire = $this->Questionaires->patchEntity($questionaire, $this->request->getData());
            if ($this->Questionaires->save($questionaire)) {
                $this->Flash->success(__('The questionaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionaire could not be saved. Please, try again.'));
        }
        $users = $this->Questionaires->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionaire', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionaire = $this->Questionaires->get($id);
        if ($this->Questionaires->delete($questionaire)) {
            $this->Flash->success(__('The questionaire has been deleted.'));
        } else {
            $this->Flash->error(__('The questionaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * Questionnaire
     */
    public function questionnaire()
    {
        //
    }

    /**
     * Health Goals
     */
    public function healthGoals()
    {
        if ($this->request->session()->read('Auth.User.questionaireId')) {
            $questionaire = $this->Questionaires->get([$this->request->session()->read('Auth.User.questionaireId')]);
        } else {
            $questionaire = $this->Questionaires->newEntity();
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (ctype_space($this->request->data['other_health_goals'])) {
                $this->Flash->error(__('Others cannot be spaces only. Please fill up properly.'));
            } else {
                $questionaire = $this->Questionaires->patchEntity($questionaire, $this->request->getData());
                if ($this->Questionaires->saveQuestionaire($this->request->getData(), $this->request->session()->read('Auth.User.id'), $this->request->session()->read('Auth.User.questionaireId'), 'healthGoals')) {
                    $this->Flash->success(__("Data saved successfully!"));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The questionaire could not be saved. Please, try again.'));
                }
            }
        }

        $this->set(compact('questionaire'));
    }


    /**
     * About You
     */
    public function aboutYou()
    {
        if ($this->request->session()->read('Auth.User.questionaireId')) {
            $questionaire = $this->Questionaires->get([$this->request->session()->read('Auth.User.questionaireId')]);
        } else {
            $questionaire = $this->Questionaires->newEntity();
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (ctype_space($this->request->data['other_ethnicity'])) {
                $this->Flash->error(__('Other Ethnicity cannot be spaces only. Please fill up properly.'));
            } else {
                $questionaire = $this->Questionaires->patchEntity($questionaire, $this->request->getData());
                if ($this->Questionaires->saveQuestionaire($this->request->getData(), $this->request->session()->read('Auth.User.id'), $this->request->session()->read('Auth.User.questionaireId'), 'aboutYou')) {
                    $this->Flash->success(__("Data saved successfully!"));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The questionaire could not be saved. Please, try again.'));
                }
            }
        }

        $this->set(compact('questionaire'));
    }

    /**
     * Your Lifestyle
     */
    public function yourLifestyle()
    {
        if ($this->request->session()->read('Auth.User.questionaireId')) {
            $questionaire = $this->Questionaires->get([$this->request->session()->read('Auth.User.questionaireId')]);
        } else {
            $questionaire = $this->Questionaires->newEntity();
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (ctype_space($this->request->data['other_mental_health'])) {
                $this->Flash->error(__('Other Mental health concerns cannot be spaces only. Please fill up properly.'));
            } elseif (ctype_space($this->request->data['other_concerns'])) {
                $this->Flash->error(__('Other concerns cannot be spaces only. Please fill up properly.'));
            } else {
                $questionaire = $this->Questionaires->patchEntity($questionaire, $this->request->getData());
                if ($this->Questionaires->saveQuestionaire($this->request->getData(), $this->request->session()->read('Auth.User.id'), $this->request->session()->read('Auth.User.questionaireId'), 'yourLifestyle')) {
                    $this->Flash->success(__("Data saved successfully!"));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The questionaire could not be saved. Please, try again.'));
                }
            }
        }

        $excerciseActivities = $this->Questionaires->getExcercise();
        $data = json_decode($questionaire->your_lifestyle);
        $userExcerciseActivitiesArray = [];

        if (!empty($data->exercise_activities)) {
            $userExcerciseActivities = $data->exercise_activities;

            foreach ($userExcerciseActivities as $key => $value) {
                $userExcerciseActivitiesArray [$value] = $value;
            }
        }


        

        $this->set(compact('questionaire', 'excerciseActivities', 'userExcerciseActivitiesArray'));
    }
}
