<?php namespace Cptmeatball\Pricetables\Components;

use Cms\Classes\ComponentBase;
use Db;

class PriceTable extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PriceTable Component',
            'description' => 'Renders a pricetable'
        ];
    }

    public function defineProperties()
    {
        return [
            'Table'    => [
                'title'         => 'PriceTable',
                'type'          => 'dropdown',
                'placeholder'   => 'Select a table'
            ]
        ];
    }

    public function getTableOptions()
    {
        
        return Db::table('cptmeatball_pricetables_price_tables')->lists('title');
    }
}