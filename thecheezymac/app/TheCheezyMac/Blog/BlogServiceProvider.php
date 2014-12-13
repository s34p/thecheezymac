<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */

namespace TheCheezyMac\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\Blog\BlogInterface',
            'TheCheezyMac\Blog\BlogImplementation'
        );
    }

}