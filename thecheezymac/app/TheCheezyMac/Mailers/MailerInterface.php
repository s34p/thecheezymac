<?php namespace TheCheezyMac\Mailers;


interface MailerInterface {
    public function sendTo($user, $sender, $subject, $view, $data = []);
} 