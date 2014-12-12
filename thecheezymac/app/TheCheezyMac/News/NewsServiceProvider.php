<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */

namespace TheCheezyMac\News;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\News\NewsInterface',
            'TheCheezyMac\News\NewsImplementation'
        );
    }

}