<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $helpers = [
            'Form' => [
                'className' => 'Bootstrap.Form'
            ],
            'Html' => [
                'className' => 'Bootstrap.Html'
            ],
            'Modal' => [
                'className' => 'Bootstrap.Modal'
            ],
            'Navbar' => [
                'className' => 'Bootstrap.Navbar'
            ],
            'Paginator' => [
                'className' => 'Bootstrap.Paginator'
            ],
    ];
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent(
            'Auth', [
                'authenticate' =>[
                    'Form' => [
                        'fields' => [
                                    'username' => 'email',
                                    'password' => 'password'
                                ]
                    ]
                ],
                'loginRedirect' => [
                    'controller' => 'users',
                    'action' => 'dashboard'
                ],

                'logoutRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
            ]
        );

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }


    /**
     *  Allow access to unauthenticated users
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow([
                            'index',
                            'view',
                            'display',
                            'forgotPassword',
                            'token',
                            'newPassword',
                            'checkout'
                    ]);
    }


    /**
     * Handle requests and data loading before all actions
     */
    public function beforeRender(Event $event)
    {
        if ($this->request->session()->read('Auth.User')) {
            $userId = $this->request->session()->read('Auth.User.id');
            $questionaireId = $this->_getQuestionaireId($userId);
            $this->request->session()->write('Auth.User.questionaireId', $questionaireId);
        }
    }

    /**
     * Fetch questionaire id by user id
     * @return questionaire id
     */
    public function _getQuestionaireId($userId)
    {
        $questionaire = TableRegistry::get('Questionaires');
        $results = $questionaire->find(
            'list',
            [
                'conditions' => [
                    'user_id' => $userId
                ],
            ]
        )->toArray();
        $questionaireId = "";
        foreach ($results as $result => $value) {
            $questionaireId = $value;
        }

        return $questionaireId;
    }
}
