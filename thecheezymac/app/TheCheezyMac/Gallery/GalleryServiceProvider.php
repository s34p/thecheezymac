<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 8:17 PM
 */

namespace TheCheezyMac\Gallery;

use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind(
            'TheCheezyMac\Gallery\GalleryInterface',
            'TheCheezyMac\Gallery\GalleryImplementation'
        );
    }

}