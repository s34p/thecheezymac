<?php namespace TheCheezyMac\Mailers;


class MailerImplementation implements MailerInterface {
    public function sendTo($user, $sender, $subject, $view, $data = [])
    {
        \Mail::queue($view, $data, function($message) use ($user, $subject, $sender)
        {

            $message->from($sender->email, $sender->fullName);
            $message->replyTo($sender->email, $sender->fullName);
            $message->to($user->email, $user->fullName)
                ->subject($subject);
        });
    }
}