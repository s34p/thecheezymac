<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/17/2014
 * Time: 9:03 PM
 */

namespace TheCheezyMac\NewsLetters;


use Illuminate\Support\ServiceProvider;

class NewsLetterListServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'TheCheezyMac\NewsLetters\NewsLetterListInterface',
            'TheCheezyMac\NewsLetters\MailChimp\NewsLetterListImplementation'
        );

        $this->app->bind(
            'TheCheezyMac\NewsLetters\Notification\EmailSubscribersInterface',
            'TheCheezyMac\NewsLetters\Notification\MailChimpNotifier\EmailSubscribersImplementation'
        );
    }

}