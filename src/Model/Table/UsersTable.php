<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Model
 *
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\QuestionairesTable|\Cake\ORM\Association\HasMany $Questionaires
 * @property \App\Model\Table\ReportStatusTable|\Cake\ORM\Association\HasMany $ReportStatus
 * @property \App\Model\Table\SupplementReportsTable|\Cake\ORM\Association\HasMany $SupplementReports
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Questionaires', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ReportStatus', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('SupplementReports', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserSupplements', [
            'foreignKey' => 'user_id'
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
            ->notBlank('first_name', 'First name cannot be blank')
            ->notEmpty('first_name', 'Please enter a First Name');

        $validator
            ->notBlank('last_name', 'Last name cannot be blank')
            ->notEmpty('last_name', 'Please enter a Last Name.');

        $validator
            ->add(
                'email',
                'validFormat',[
                    'rule' => 'email',
                    'message' => 'Please enter valid email address'
                ]
            )
            ->notBlank('email', 'Email cannot be blank')
            ->notEmpty('email', 'Please enter an Email.');

        $validator
            ->notBlank('password', 'Password cannot be blank')
            ->notEmpty('password', 'Please enter a Password.', 'create')
            ->add(
                'password',[
                    'length' => [
                        'rule' => ['minLength', 8],
                        'message' => 'Please enter minimum 8 characters',
                    ]
                ]
            );

        $validator
            ->notBlank('phone_number', 'Phone number cannot be blank')
            ->notEmpty('phone_number', 'Please enter your phone number');

        $validator
            ->notBlank('gender', 'Please select gender')
            ->notEmpty('gender', 'Please select gender');

        $validator
            ->allowEmpty('role');

        $validator
            ->allowEmpty('reset_password_token');

        $validator
            ->allowEmpty('dob');

        $validator
            ->notBlank('shipping_street_address', 'Shipping street address cannot be blank')
            ->notEmpty('shipping_street_address', 'Please enter your shipping address');

        $validator
            ->notBlank('shipping_city', 'Shipping city cannot be blank')
            ->notEmpty('shipping_city', 'Please enter your shipping city');

        $validator
            ->notBlank('shipping_state', 'Shipping state cannot be blank')
            ->notEmpty('shipping_state', 'Please enter your shipping state');

        $validator
            ->notBlank('shipping_zip', 'Shipping zip code cannot be blank')
            ->notEmpty('shipping_zip', 'Pleae enter your shipping zip code');

        $validator
            ->allowEmpty('billing_street_address');

        $validator
            ->allowEmpty('billing_city');

        $validator
            ->allowEmpty('billing_state');

        $validator
            ->allowEmpty('billing_zip');

        $validator
            ->notBlank('terms_and_conditions_check')
            ->notEmpty('terms_and_conditions_check');

        return $validator;
     }

     public function validationPassword(Validator $validator)
     {
        $validator
            ->notBlank('password', 'Password cannot be blank')
            ->notEmpty('password', 'Please enter a Password.', 'create')
            ->add(
                'password',[
                    'length' => [
                        'rule' => ['minLength', 8],
                        'message' => 'Please enter minimum 8 characters',
                    ]
                ]
            );

        $validator
            ->add('current_password','custom',[
                'rule'=>  function($value, $context){
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message'=>'Please enter your correct current password!',
            ])
            ->notEmpty('current_password');

        $validator
            ->add('new_password', [
                'length' => [
                    'rule' => ['minLength', 8],
                    'message' => 'The password have to be at least 8 characters!',
                ]
            ])
            ->add('new_password',[
                'match'=>[
                    'rule'=> ['compareWith','confirm_password'],
                    'message'=>'The passwords does not match!',
                ]
            ])
            ->notEmpty('new_password');
        $validator
            ->add('confirm_password', [
                'length' => [
                    'rule' => ['minLength', 8],
                    'message' => 'The password have to be at least 8 characters!',
                ]
            ])
            ->add('confirm_password',[
                'match'=>[
                    'rule'=> ['compareWith','new_password'],
                    'message'=>'The passwords does not match!',
                ]
            ])
            ->notEmpty('confirm_password');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    /**
     * Load all states of US
     * @return  $statelist|Array
     */
    public function getStatesList()
    {
         $statesList = array(
          'AL' => 'Alabama',
          'AK' => 'Alaska',
          'AZ' => 'Arizona',
          'AR' => 'Arkansas',
          'CA' => 'California',
          'CO' => 'Colorado',
          'CT' => 'Connecticut',
          'DE' => 'Delaware',
          'DC' => 'District Of Columbia',
          'FL' => 'Florida',
          'GA' => 'Georgia',
          'HI' => 'Hawaii',
          'ID' => 'Idaho',
          'IL' => 'Illinois',
          'IN' => 'Indiana',
          'IA' => 'Iowa',
          'KS' => 'Kansas',
          'KY' => 'Kentucky',
          'LA' => 'Louisiana',
          'ME' => 'Maine',
          'MD' => 'Maryland',
          'MA' => 'Massachusetts',
          'MI' => 'Michigan',
          'MN' => 'Minnesota',
          'MS' => 'Mississippi',
          'MO' => 'Missouri',
          'MT' => 'Montana',
          'NE' => 'Nebraska',
          'NV' => 'Nevada',
          'NH' => 'New Hampshire',
          'NJ' => 'New Jersey',
          'NM' => 'New Mexico',
          'NY' => 'New York',
          'NC' => 'North Carolina',
          'ND' => 'North Dakota',
          'OH' => 'Ohio',
          'OK' => 'Oklahoma',
          'OR' => 'Oregon',
          'PA' => 'Pennsylvania',
          'RI' => 'Rhode Island',
          'SC' => 'South Carolina',
          'SD' => 'South Dakota',
          'TN' => 'Tennessee',
          'TX' => 'Texas',
          'UT' => 'Utah',
          'VT' => 'Vermont',
          'VA' => 'Virginia',
          'WA' => 'Washington',
          'WV' => 'West Virginia',
          'WI' => 'Wisconsin',
          'WY' => 'Wyoming',
        );

        return $statesList;
    }

    /**
     * Check if email exists
     * @return  boolean
     */
    public function checkIfEmailExists($email)
    {
        $exists = $this->exists(['email' => $email]);
        if ($exists) {
            return true;
        }

        return false;
    }

    /**
     * Update token
     */
    public function updateToken($email)
    {
        $result = $this->find('list', [
                    'conditions' => ['Users.email =' => $email],
                    'limit' => 1
                ]);
        $userId = "";
        if (!$result->isEmpty()) {
            $result = $result->toArray();


            foreach ($result as $id => $value) {
                $userId = $id;
            }
        }

        $user = $this->get($userId);
        $reset_token = uniqid();
        $user['reset_password_token'] = $reset_token;
        if ($this->save($user)) {
            return ['user_id'=>$userId, 'token'=> $reset_token];
        }

        return false;
    }

    /**
     * Match token
     */
    public function matchToken($userToken)
    {
        $results = $this->find('all', [
                    'conditions' => [
                                'Users.reset_password_token =' => $userToken
                            ],
                    'limit' => 1
                ]);
        $userId = "";
        if (!$results->isEmpty()) {
            $results = $results->toArray();
            foreach ($results as $user) {
                $userId = $user['id'];
            }

            $user = $this->get($userId);
            $userIdHash = Security::hash($userId);
            $user->reset_password_token = $userIdHash;
            if ($this->save($user)) {
                return $userIdHash;
            }
        }

        return false;
    }

    /**
     * Get user ID from idHash
     */
    public function getUserId($idHash)
    {
        $results = $this->find('all', [
                    'conditions' => [
                                'Users.reset_password_token =' => $idHash
                            ],
                    'limit' => 1
                ]);
        $userId = "";
        if (!$results->isEmpty()) {
            $results = $results->toArray();
            foreach ($results as $user) {
                $userId = $user['id'];
            }
            $user = $this->get($userId);
            if ($this->save($user)) {
                return $userId;
            }
        }

        return $userId;
    }

    /**
     * Hash cleaner
     */
    public function cleanUpHash($userId)
    {
        $user = $this->get($userId);
        $user->reset_password_token = "";
        $this->save($user);
    }
}
