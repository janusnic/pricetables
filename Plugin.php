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
            'name'        => 'Price Tables',
            'description' => 'A convenient plugin that let users manage price tables from the backend',
            'author'      => 'cptmeatball',
            'icon'        => 'icon-leaf'
        ];
    }

}
