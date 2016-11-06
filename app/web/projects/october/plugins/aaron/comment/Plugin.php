<?php
namespace Aaron\comment;

use System\Classes\PluginBase;

class Commentplugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Aaron Zhou',
            'description' => 'Small comments tool'
        ];
    }
    public function registerComponents()
    {
        return [
            '\aaron\webcomment\components\comments' => 'comment'
        ];
    }
}