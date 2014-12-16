<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:49 PM
 */

namespace TheCheezyMac\Users\Login;

use Cartalyst\Sentry\Facades\Laravel\Sentry as Sentry;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Cartalyst\Sentry\Users\WrongPasswordException;
use TheCheezyMac\Mailers\MailerInterface as Mailer;

class LoginImplementation implements LoginInterface{


    /**
     * @var Mailer
     */
    private $mailer;

    public function __construct(Mailer $mailer)
    {

        $this->mailer = $mailer;
    }

    public function login(array $inputs)
    {

        try
        {
            // Login credentials
            $credentials = array(
                'email'    => $inputs['email'],
                'password' => $inputs['password'],
            );

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);

            //$groups = $user->getGroups();

            \Session::put('id', $user->id);
            \Session::put('email', $user->email);
            \Session::put('last_login', $user->last_login);


            return \Redirect::intended('/webadmin/dashboard');
        }
        catch (WrongPasswordException $e)
        {
            return \Redirect::back()->with('sentryError','Incorrect Email / Password');
        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::back()->with('sentryError',' User is not found ');
        }

    }

    public function passwordReminder($email)
    {
        try
        {
            // Find the user using the user email address
            $user = Sentry::findUserByLogin($email);

            // Get the password reset code
            $resetCode = $user->getResetPasswordCode();

            // Now you can send this code to your user via email for example.
            $view = 'emails.auth.reminder';
            $subject = 'The Cheezy Mac Password Reset';
            $data = ['resetCode'=>$resetCode,'id'=>$user->id, 'lastName'=>$user->last_name];

            \Mail::queue($view, $data, function($message) use ($user, $subject)
            {
                $message->from('corp@thecheezymac.com','The Cheezy Mac');
                $message->to($user->email, $user->lastName)
                    ->subject($subject);
            });

            return \Redirect::to('/webadmin')->with('success','Please check your email for instructions on how to reset your password');
        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::back()->with('sentryError','Email Address not found');
        }
    }

    public function resetPassword($userId, $resetCode, $password)
    {
        try
        {
            // Find the user using the user id
            $user = Sentry::findUserById($userId);

            // Check if the reset password code is valid
            if ($user->checkResetPasswordCode($resetCode))
            {
                // Attempt to reset the user password
                if ($user->attemptResetPassword($resetCode, $password))
                {
                    $user->password = $password;

                    $user->save();

                    Sentry::login($user, false);

                    return \Redirect::to('/webadmin')->with('success','Your password has been changed');
                }
                else
                {
                    return \Redirect::back()->with('sentryError','There was a technical error. Please try again');
                }
            }
            else
            {
                return \Redirect::to('/webadmin')->with('sentryError','The reset code is incorrect');
            }
        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::back()->with('sentryError',' User not found ');
        }
    }
}