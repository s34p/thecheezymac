<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/17/2014
 * Time: 8:42 PM
 */

namespace TheCheezyMac\NewsLetters\MailChimp;


use Mailchimp;
use TheCheezyMac\NewsLetters\NewsLetterListInterface;

class NewsLetterListImplementation implements NewsLetterListInterface {


    /**
     * @var
     */
    protected $mailchimp;

    protected $lists = [
        'Subscribers'   =>  '58cc1c5e9f'
    ];

    public function __construct(Mailchimp $mailchimp)
    {

        $this->mailchimp = $mailchimp;
    }



    /**
     * @param $listID
     * @param $email
     */
    public function subscribeTo($listName, array $inputs)
    {
        $options = [
            'FNAME' => $inputs['firstName'],
            'LNAME' => $inputs['lastName']
        ];

        $email = $inputs['email'];

        return $this->mailchimp->lists->subscribe(
            $this->lists[$listName],
            ['email'=>$email],
            $options, //Merge vars
            'html', //Email Type
            false, //Send double opt in (send confirmation email to user before adding to the list)
            true // update existing customer
        );
    }


    /**
     * @param $listID
     * @param $email
     */
    public function unsubscribeFrom($listName, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->lists[$listName],
            ['email'=>$email],
            false, // Delete customer permanently
            false, // Send goodbye email
            false // Send unsubscribe notification email
        );
    }

}