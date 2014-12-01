<?php namespace TheCheezyMac\Forms;


use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception {

    /**
     * @var \Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * @param string $message
     * @param MessageBag $errors
     */
    function __construct($message, MessageBag $errors)
    {
        $this->errors = $errors;

        parent::__construct($message);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}