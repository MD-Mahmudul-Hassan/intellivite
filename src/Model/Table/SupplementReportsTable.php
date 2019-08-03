<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SupplementReports Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SupplementsTable|\Cake\ORM\Association\BelongsTo $Supplements
 *
 * @method \App\Model\Entity\SupplementReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\SupplementReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SupplementReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SupplementReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SupplementReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SupplementReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SupplementReport findOrCreate($search, callable $callback = null, $options = [])
 */
class SupplementReportsTable extends Table
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

        $this->setTable('supplement_reports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Supplements', [
            'foreignKey' => 'supplement_id',
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
            ->scalar('your_lifestyle')
            ->maxLength('your_lifestyle', 50)
            ->requirePresence('your_lifestyle', 'create')
            ->notEmpty('your_lifestyle');

        $validator
            ->scalar('your_goals')
            ->maxLength('your_goals', 50)
            ->requirePresence('your_goals', 'create')
            ->notEmpty('your_goals');

        $validator
            ->scalar('your_genetics')
            ->maxLength('your_genetics', 50)
            ->requirePresence('your_genetics', 'create')
            ->notEmpty('your_genetics');

        $validator
            ->requirePresence('activation_status', 'create')
            ->notEmpty('activation_status');

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
        $rules->add($rules->existsIn(['supplement_id'], 'Supplements'));

        return $rules;
    }
}
