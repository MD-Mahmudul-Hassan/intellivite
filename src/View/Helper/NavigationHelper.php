<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;


class NavigationHelper extends Helper {

    private $menuModel;

    private $logoModel;

    /*
        Initializes the Menu Model
    */
    public function __construct() {
        $this->menuModel = TableRegistry::get('Menus');
        $this->logoModel = TableRegistry::get('Logos');
    }

    /*
        Fetches all the active Menus
    */
    public function fetchMenus() {
        return $this->menuModel->find('all', [
            'conditions' => [
                'Menus.active' => 1
            ]])->toArray();
    }

    /*
        Fethces the Logo
    */
    public function fetchLogo() {
        $logoQuery = $this->logoModel->find('all');
        $logo = $logoQuery->first();
        return DS . $logo['photo_dir'] . $logo['photo'];
    }

    /*
        Prints the start elements of the navbar
        Prints the logo too.
    */
    public function fetchStartElements() {
        $logo = $this->fetchLogo();
        $startElements = [
            "<nav class='navbar navbar-expand-md navbar-light bg-light'>",
            "<a class='navbar-brand' href='#'><img src=" . $logo . "></a>",
            "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>",
            "<div class='collapse navbar-collapse' id='navbarNavDropdown'>",
            "<ul class='navbar-nav'>"
        ];
        return implode("", $startElements);
    }

    /*
        Finishes printing the navbar
    */
    public function fetchEndElements($incompleteBar) {
        $isLoggedIn = $this->checkUserIsLoggedIn();
        if($isLoggedIn) {
            $id = $this->getUser('id');
            $loginHref = '/users/logout';
            $loginLinkName = 'Logout';
            $registerHref = '';
            $registerLinkName = '';
            if ($this->isGeneralUser()) {
                $dashboardLinkName = "Dashboard";
                $dashboardLink = "/users/dashboard";
            }
        } else {
            $loginHref = '/users/login';
            $loginLinkName = 'Login';
            $registerHref = '/users/register';
            $registerLinkName = 'Register';
        }

        if ($this->isGeneralUser()) {
            $endElements = [
                $incompleteBar,
                "</ul><ul class='navbar-nav ml-auto'>",
                "<li class='nav-item'>",
                "<a class='nav-link' href={$dashboardLink}><i class='fa fa-home fa-lg'></i> {$dashboardLinkName}</a>",
                "</li>",
                "<li class='nav-item dropdown'>",
                "<a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>",
                $this->getUser('first_name'),
                "</a>",
                "<ul class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>",
                "<a class='dropdown-item' href='/users/edit/{$id}'><i class='fa fa-user-circle'></i>&nbsp;Profile</a>",
                "<a class='dropdown-item' href={$loginHref}><i class='fa fa-sign-out'></i> {$loginLinkName}</a>",
                "</ul>",
                "</li>",
                "<li class='nav-item'>",
                "<a class='nav-link' href={$registerHref}>{$registerLinkName}</a>",
                "</li>",
                "</ul>",
                "</div>",
                "</nav>"
            ];
        } else {
            $endElements = [
                $incompleteBar,
                "</ul><ul class='navbar-nav ml-auto'>",
                "<li class='nav-item'>",
                "<a class='nav-link' href={$loginHref}><i class='fa fa-sign-out fa-lg'></i> {$loginLinkName}</a>",
                "</li>",
                "<li class='nav-item'>",
                "<a class='nav-link' href={$registerHref}>{$registerLinkName}</a>",
                "</li>",
                "</ul>",
                "</div>",
                "</nav>"
            ];
        }

        return implode("", $endElements);
    }

    /*
        Combines Start elements + Menus from database + End elements.
    */
    public function printNavigationMenu() {
        $navigationBar = $this->fetchStartElements();
        $menus = $this->fetchMenus();
        foreach($menus as $menu) {
            $hasChild = $this->checkHasChild($menu['id']);
            $class = $hasChild ? 'dropdown-toggle' : '';
            if($menu['parent_id'] == 0) {
                $navigationBar .= "<li class='nav-item dropdown'><a class='nav-link $class' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >". $menu['name'] ." <span class=''></span></a>";
                $id = $menu['id'];
                $navigationBar = $this->createSubMenu($menus, $id, $navigationBar);
                $navigationBar .= "</li>";
            }
        }
        $navigationBar = $this->fetchEndElements($navigationBar);
        echo $navigationBar;
    }

    /*
        Creates Submenu recursively for menus having children
    */
    public function createSubMenu($menus, $id, $incompleteBar) {
        $continue = $this->checkHasChild($id);
        if($continue) {
            $incompleteBar .= "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
            foreach($menus as $menu) {
            $hasChild = $this->checkHasChild($menu['id']);
            $class = $hasChild ? 'dropdown-toggle' : '';
                if($menu['parent_id'] == $id) {
                    $incompleteBar .= "<li><a class='dropdown-item $class'>" . $menu['name'] . "</a>";
                    $incompleteBar = $this->createSubMenu($menus, $menu['id'], $incompleteBar);
                    $incompleteBar .= "</li>";
                }
            }
            $incompleteBar .= "</ul>";
        }
        return $incompleteBar;
    }

    /*
        Checks if any menu(Parent OR child) has child menus
        to stop providing some css classes.
    */
    public function checkHasChild($id) {
        $childs = $this->menuModel->find('all', [
            'conditions' => [
                'Menus.parent_id' => $id,
                'Menus.active' => 1
            ]
        ])->toArray();
        if(count($childs)) {
            return true;
        }
        return false;
    }

    /*
        Checks if user is logged in.
    */
    public function checkUserIsLoggedIn() {
        $user = $this->request->session()->read('Auth.User.id');
        if($user) {
            return true;
        }
        return false;
    }

    /*
    * Check if user is general user
    */
    public function isGeneralUser()
    {
        $loggedIn = $this->request->session()->read('Auth.User.id');
        $role = $this->request->session()->read('Auth.User.role');
        if (!empty($loggedIn) && $role === 2) {
            return true;
        }
        return false;
    }

    /*
        Returns Logged In User Object
    */
    public function getUser($param) {
        $user = $this->request->session()->read('Auth.User');
        return $user[$param];
    }


}
?>
