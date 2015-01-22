<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/17/2014
 * Time: 9:12 PM
 */

namespace TheCheezyMac\NewsLetters\Notification\MailChimpNotifier;


use Mailchimp;
use TheCheezyMac\NewsLetters\Notification\EmailSubscribersInterface;

class EmailSubscribersImplementation implements EmailSubscribersInterface {
    /**
     * @var Mailchimp
     */
    private $mailchimp;

    /**
     * @param \Mailchimp $
     */
    public function __construct(Mailchimp $mailchimp)
    {

        $this->mailchimp = $mailchimp;
    }


    public function notify($title, $body)
    {

        $options = [
            'list_id'       =>  '3e0fdae650',
            'subject'       =>  $title,
            'from_name'     =>  'The Cheezy Mac',
            'from_email'    =>  'club@thecheezymac.com',
            'to_name'       =>  'The Cheezy Mac Subscribers'
        ];

        $content = [
            'html'  =>  $body,
            'text'  =>  strip_tags($body)
        ];

        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}