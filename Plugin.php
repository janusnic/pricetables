<?php namespace Cptmeatball\Pricetables;

use System\Classes\PluginBase;

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

}
