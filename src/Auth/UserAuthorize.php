<?php

namespace App\Auth;

use Cake\Auth\BaseAuthorize;
use Cake\Network\Request;
use App\Model\Entity\User;

class UserAuthorize extends BaseAuthorize
{
    public function authorize($user, Request $request)
    {
        $this->_user = $user;

        $authorized = false;

        switch ($request->params['controller']) {
            default:
                if (!empty($user)) {
                    $authorized = true;
                }
                break;
        }

        return $authorized;
    }
}
