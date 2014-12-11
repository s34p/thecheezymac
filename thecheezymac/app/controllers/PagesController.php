<?php

use TheCheezyMac\Mailers\MailerInterface as Mailer;

class PagesController extends BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var MailerInterface
     */
    private $mailer;


    public function __construct(Mailer $mailer)
    {

        $this->mailer = $mailer;
    }

    public function index()
	{
		$this->layout->content = View::make('public.index');
	}

	public function story()
	{
	    $this->layout->content = View::make('public.story');
	}

    public function menu()
    {
    	$this->layout->content = View::make('public.menu');
    }

    public function specials()
    {
    	$this->layout->content = View::make('public.specials');
    }

    public function club()
    {
    	$this->layout->content = View::make('public.club');
    }

    public function catering()
    {
    	$this->layout->content = View::make('public.catering');
    }

    public function giftcard()
    {
    	$this->layout->content = View::make('public.giftcard');
    }

    public function contactus()
    {
    	$this->layout->content = View::make('public.contactus');
    }

    public function app()
    {
    	$this->layout->content = View::make('public.app');
    }

    public function pressMedia()
    {
    	$this->layout->content = View::make('public.pressMedia');
    }

    public function franchise()
    {
    	$this->layout->content = View::make('public.franchise');
    }


    /**
     * Process Comment's Form
     */
    public function comments()
    {
    	$rules = [
            'phone'    =>  'required',
            'comment'     =>  'required',
            'email'         =>  'required|email'
        ];

        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validation->getMessageBag()->toArray()
            ]);
        }

        $recipient = $this->recipient();
        $sender = $this->sender();
        $formInputs = $this->commentsInputs();
        $view = 'emails.contactus';
        $subject = 'New Comment';

        $this->mailer->sendTo($recipient, $sender, $subject, $view, $formInputs);

        return Response::json([
            'success'   =>  true,
            'msg'       =>  'Your comment was sent successfully. Thank you'
        ], 200);
    }

    private function commentsInputs()
    {
        return $formInputs = [
            'email' =>  Input::get('email'),
            'phone' =>  Input::get('phone'),
            'comment' =>Input::get('comment')
        ];
    }

    private function recipient()
    {
        $userArray = ['email'=>'rrafiatech@gmail.com','fullName'=>'Rachid Rafia'];
        return arrayToObject::execute($userArray);

    }

    private function sender()
    {
        $senderArray = [
            'email' => Input::get('email'),
            'fullName' => Input::get('email')
        ];
        return arrayToObject::execute($senderArray);
    }



    public function dashboard()
    {
    	$this->layout->content = View::make('private.dashboard');
    }



}
