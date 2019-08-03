<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Questionaires Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Questionaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Questionaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Questionaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Questionaire|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Questionaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Questionaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Questionaire findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionairesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('questionaires');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('health_goals');

        $validator
            ->notBlank('other_health_goals', 'Only spaces are not allowed. Please fill up properly.')
            ->allowEmpty('other_health_goals');

        $validator
            ->allowEmpty('about_you');

        $validator
            ->allowEmpty('your_nutrition');

        $validator
            ->allowEmpty('your_lifestyle');

        $validator
            ->allowEmpty('medical_history');

        $validator
            ->allowEmpty('form_completion');

        $validator
            ->allowEmpty('date_of_update');

        $validator
            ->allowEmpty('sent_notification');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }

    /**
     * Questionaire form data handling
     * @return true on success, false otherwise
     */
    public function saveQuestionaire($data, $userId, $questionaireId = null, $formType = null)
    {
        if (!empty($questionaireId)) {
            $questionaire = $this->get($questionaireId);
        } else {
            $questionaire = $this->newEntity();
        }
        $questionaire->user_id = $userId;

        switch ($formType) {
            case 'healthGoals':
                $questionaire->health_goals = json_encode($data);
                break;

            case 'aboutYou':
                $questionaire->about_you = json_encode($data);
                break;

            case 'yourLifestyle':
                $questionaire->your_lifestyle = json_encode($data);
                break;

            default:
                break;
        }

        
        if ($this->save($questionaire)) {
            return true;
        }

        return false;
    }

    /**
     * Get all excercise
     */
    public function getExcercise()
    {
        $exerciseActivities = TableRegistry::get('ExerciseActivities');

        $exerciseList = $exerciseActivities->find('list');

        $exerciseList = $exerciseList->toArray();

        return $exerciseList;
    }
}
