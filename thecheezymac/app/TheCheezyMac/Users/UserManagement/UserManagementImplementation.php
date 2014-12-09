<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Users\UserManagement;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Cartalyst\Sentry\Users\UserExistsException as SentryUserExist;
use Cartalyst\Sentry\Users\UserNotFoundException;

class UserManagementImplementation implements UserManagementInterface{


    public function add(array $inputs)
    {
        try
        {
            $user = Sentry::createUser([
                'first_name' => $inputs['first_name'],
                'last_name' => $inputs['last_name'],
                'email' => $inputs['email'],
                'password' => $inputs['password'],
                'activated' => true,
            ]);

            $adminGroup = Sentry::findGroupById(1);

            $user->addGroup($adminGroup);

            return \Redirect::to('/webadmin/users')->with('success','The user has been created successfully');
        }
        catch (SentryUserExist $e)
        {
            return \Redirect::back()->withInput()->with('sentryError','The user already exist');
        }
    }

    public function update(array $inputs, $userId)
    {
        try
        {
            $user = Sentry::findUserById($userId);

            $user->first_name = $inputs['first_name'];
            $user->last_name = $inputs['last_name'];
            $user->email = $inputs['email'];

            if($user->save())
            {
                return \Redirect::to('/webadmin/users')->with('success','The user has been updated successfully');
            }

        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::to('/webadmin/users')->with('sentryError','User was not found!');
        }
    }

    public function updatePassword(array $inputs, $userId)
    {
        try
        {
            $user = Sentry::findUserById($userId);

            $user->password = $inputs['password'];


            if($user->save())
            {
                return \Redirect::to('/webadmin/users')->with('success','The user password was updated successfully');
            }

        }
        catch (UserNotFoundException $e)
        {
            return \Redirect::to('/webadmin/users')->with('sentryError','User was not found!');
        }
    }


} 