<?php namespace TheCheezyMac\Mailers;


class MailerImplementation implements MailerInterface {
    public function sendTo($user, $subject, $view, $data = [])
    {
        \Mail::queue($view, $data, function($message) use ($user, $subject)
        {
            $message->to($user->email, $user->fullName)
                ->subject($subject);
        });
    }
}