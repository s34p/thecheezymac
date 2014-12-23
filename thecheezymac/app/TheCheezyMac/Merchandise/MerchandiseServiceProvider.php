<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */

namespace TheCheezyMac\Merchandise;

use Illuminate\Support\ServiceProvider;

class MerchandiseServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\Merchandise\MerchandiseInterface',
            'TheCheezyMac\Merchandise\MerchandiseImplementation'
        );
    }

}