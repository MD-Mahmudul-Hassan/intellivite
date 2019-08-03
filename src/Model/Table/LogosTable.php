<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logos Model
 *
 * @method \App\Model\Entity\Logo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogosTable extends Table
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

        $this->setTable('logos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],

            ],
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


        $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator->add('photo', 'fileBelowMaxHeight', [
            'rule' => ['isBelowMaxHeight', 75],
            'message' => 'This image should not be higher than 75px',
            'provider' => 'upload'
        ]);

        $validator->add('photo', 'fileBelowMaxWidth', [
            'rule' => ['isBelowMaxWidth', 75],
            'message' => 'This image should not be wider than 75px',
            'provider' => 'upload'
        ]);

        $validator->add('photo', [
                'validExtension' => [
                    'rule' => ['extension',['png', 'jpeg', 'jpg']], // default  ['gif', 'jpeg', 'png', 'jpg']
                    'message' => __('These files extension are allowed: .png, .jpeg, .jpg')
                ]
        ]);

        return $validator;
    }
}
