<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:48 PM
 */

namespace TheCheezyMac\Users\Login;


interface LoginInterface {

    public function login(array $inputs);
    public function passwordReminder($email);
    public function resetPassword($userId, $resetCode, $password);

} 