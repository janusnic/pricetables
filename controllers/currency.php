<?php namespace Cptmeatball\Pricetables\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Currency extends Controller {
	public function __construct()
	{
		parent::__construct();

		BackendMenu::setContext('Cptmeatball.Pricetables', 'pricetables', 'currency');
	}

	public function index()
	{
		$this->pageTitle = "Currency";
	}
}