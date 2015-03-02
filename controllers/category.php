<?php namespace Cptmeatball\Pricetables\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Category extends Controller {
	public function __construct()
	{
		parent::__construct();

		BackendMenu::setContext('Cptmeatball.Pricetables', 'pricetables', 'category');
	}

	public function index()
	{
		$this->pageTitle = "Category";
	}
}