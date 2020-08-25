<?php namespace Iamk\Banner\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contacts extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Iamk.Banner', 'main-menu-item', 'side-menu-item3');
    }
}
