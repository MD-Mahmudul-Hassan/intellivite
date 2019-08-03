<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supplements Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $SupplementTypes
 * @property \App\Model\Table\SupplementReportsTable|\Cake\ORM\Association\HasMany $SupplementReports
 * @property |\Cake\ORM\Association\HasMany $UserSupplements
 *
 * @method \App\Model\Entity\Supplement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supplement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Supplement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supplement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supplement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supplement findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupplementsTable extends Table
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

        $this->setTable('supplements');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SupplementTypes', [
            'foreignKey' => 'supplement_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('SupplementReports', [
            'foreignKey' => 'supplement_id'
        ]);
        $this->hasMany('UserSupplements', [
            'foreignKey' => 'supplement_id'
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->notBlank('name', 'Please enter a suitable supplement name.');

        $validator
            ->scalar('summary')
            ->requirePresence('summary', 'create')
            ->notBlank('summary', 'Please enter a short summary.')
            ->notEmpty('summary');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notBlank('description', 'Please enter a brief description.')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['supplement_type_id'], 'SupplementTypes'));

        return $rules;
    }
}
