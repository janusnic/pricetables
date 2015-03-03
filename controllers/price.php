<?php namespace Cptmeatball\Pricetables\Controllers;

use Backend\Classes\Controller;
use Lang;
use BackendMenu;
use Cptmeatball\Pricetables\Models\Pricetable;

class Price extends Controller {

	public $implement = ['Backend.Behaviors.FormController','Backend.Behaviors.ListController'];
	public $listConfig = 'list_config.yaml';
	public $formConfig = 'form_config.yaml';

	public function __construct()
	{
		parent::__construct();

		BackendMenu::setContext('Cptmeatball.Pricetables', 'pricetables', 'price');
	}

	public function index()
	{
		$this->asExtension('ListController')->index();
	}
}