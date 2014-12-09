<?php

use TheCheezyMac\Users\Login\LoginInterface;
use TheCheezyMac\Users\Login\LoginValidation;

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

    public function __construct(LoginValidation $loginValidation, LoginInterface $authenticate)
    {

        $this->loginValidation = $loginValidation;
        $this->authenticate = $authenticate;
    }

    public function authenticate()
    {
        $this->layout->content = View::make('private.login');
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
}
