<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */

namespace TheCheezyMac\Winners;

use Illuminate\Support\ServiceProvider;

class WinnersServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\Winners\WinnersInterface',
            'TheCheezyMac\Winners\WinnersImplementation'
        );
    }

}