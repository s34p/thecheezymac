<?php

use TheCheezyMac\Users\Login\ForgotPasswordValidation;
use TheCheezyMac\Users\Login\LoginInterface;
use TheCheezyMac\Users\Login\LoginValidation;
use TheCheezyMac\Users\Login\ResetPasswordValidation;

class AuthController extends \BaseController
{
    protected $layout = "public.layout.default";
    /**
     * @var LoginValidation
     */
    private $loginValidation;

    /**
     * @var LoginInterface
     */
    private $authenticate;
    /**
     * @var ForgotPasswordValidation
     */
    private $forgotPasswordValidation;
    /**
     * @var ResetPasswordValidation
     */
    private $resetPasswordValidation;

    public function __construct(LoginValidation $loginValidation, LoginInterface $authenticate, ForgotPasswordValidation $forgotPasswordValidation, ResetPasswordValidation $resetPasswordValidation)
    {

        $this->loginValidation = $loginValidation;
        $this->authenticate = $authenticate;
        $this->forgotPasswordValidation = $forgotPasswordValidation;
        $this->resetPasswordValidation = $resetPasswordValidation;
    }

    public function authenticate()
    {
        $this->layout->content = View::make('private.auth.login');
    }

    public function postAuthenticate()
    {
        $this->loginValidation->validate(Input::all());

        return $this->authenticate->login(Input::all());
    }

    public function logout()
    {
        Sentry::logout();
        return Redirect::to("/");

    }


    public function forgotPassword()
    {
        $this->layout->content = View::make('private.auth.forgotPassword');
    }

    public function postForgotPassword()
    {
        $this->forgotPasswordValidation->validate(Input::all());

        return $this->authenticate->passwordReminder(Input::get('email'));
    }

    public function resetPassword($userId, $resetCode)
    {
        $this->layout->content = View::make('private.auth.resetPassword', compact('userId','resetCode'));
    }

    public function postResetPassword($userId, $resetCode)
    {
        $this->resetPasswordValidation->validate(Input::all());

        return $this->authenticate->resetPassword($userId, $resetCode, Input::get('password'));
    }
}
