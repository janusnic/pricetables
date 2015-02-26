<?php namespace Cptmeatball\Pricetables;

use System\Classes\PluginBase;
use Backend;
/**
 * pricetables Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'pricetables',
            'description' => 'No description provided yet...',
            'author'      => 'cptmeatball',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Cptmeatball\Pricetables\Components\PriceTable' => 'PriceTable'
        ];
    }

    public function registerNavigation()
    {
        return [
            'pricetables' => [
                'label' => "Pricetables",
                'url' => Backend::url('cptmeatball/pricetables/pricetables'),
                'icon' => 'icon-table',

                'sideMenu' => [
                    'currency' => [
                        'label' => "currency",
                        'icon'  => 'icon-money',
                        'url'   => Backend::url('cptmeatball/pricetables/currency')
                    ]
                ]
            ]
        ];
    }
}
