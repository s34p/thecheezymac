<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */
namespace TheCheezyMac\Users;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\Users\Login\LoginInterface',
            'TheCheezyMac\Users\Login\LoginImplementation'
        );
    }

}