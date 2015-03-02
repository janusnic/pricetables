<?php namespace Cptmeatball\Pricetables\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Price extends Controller {


	public function __construct()
	{
		parent::__construct();

		BackendMenu::setContext('Cptmeatball.Pricetables', 'pricetables', 'price');
	}

	public function index()
	{
		$this->pageTitle = 'Prices';

	}
}