<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:49 PM
 */

namespace TheCheezyMac\Users\Login;

use Cartalyst\Sentry\Facades\Native\Sentry as Sentry;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Cartalyst\Sentry\Users\WrongPasswordException;

class LoginImplementation implements LoginInterface{


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

            $groups = $user->getGroups();

            \Session::put('id', $user->id);
            \Session::put('email', $user->email);
            \Session::put('fullName', $user->fullName);
            \Session::put('type', $user->type);
            \Session::put('last_login', $user->last_login);


            return \Redirect::intended('webadmin/dashboard');
        }
        catch (WrongPasswordException $e)
        {
            return \Redirect::back()->with('sentryError','Email / Password are wrong');
        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::back()->with('sentryError',' User is not found ');
        }

    }
}