<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/17/2014
 * Time: 9:10 PM
 */

namespace TheCheezyMac\NewsLetters\Notification;


interface EmailSubscribersInterface {

    public function notify($title, $body);

}