<?php namespace TheCheezyMac\Mailers;

use Illuminate\Support\ServiceProvider;

class MailersServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind(
            'TheCheezyMac\Mailers\MailerInterface',
            'TheCheezyMac\Mailers\MailerImplementation'
        );
    }
} 