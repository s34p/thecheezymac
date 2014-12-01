<?php namespace TheCheezyMac\Mailers;


interface MailerInterface {
    public function sendTo($user, $subject, $view, $data = []);
} 