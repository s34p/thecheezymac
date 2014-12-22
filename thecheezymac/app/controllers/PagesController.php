<?php

use TheCheezyMac\Comments\Comments;
use TheCheezyMac\Mailers\MailerInterface as Mailer;

class PagesController extends BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var Comments
     */
    private $commentModel;


    public function __construct(Mailer $mailer, Comments $commentModel)
    {

        $this->mailer = $mailer;
        $this->commentModel = $commentModel;
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

    public function postFranchise()
    {
        $rules = [
            'fullName' => 'required',
            'email'         =>  'required|email',
            'phone'    =>  'alpha_dash|required',

        ];

        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation);
        }


        $recipient = $this->franchiseRecipient();
        $sender = $this->sender();
        $formInputs = $this->franchiseInputs();
        $view = 'emails.franchise';
        $subject = 'New Franchise Request';

        $this->mailer->sendTo($recipient, $sender, $subject, $view, $formInputs);

        return Redirect::back()->withSuccess('Your request has been successfully sent. We will get back with you as soon as possible. Thank you');
    }

    public function gallery()
    {
    	$this->layout->content = View::make('public.gallery');
    }
    public function employment()
    {
    	$this->layout->content = View::make('public.employment');
    }

    public function postEmployment()
    {
        $rules = [
            'position' => 'required',
            'startDate' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email'    =>  'required|email',
            'phone'    =>  'required',
        ];

        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }



        $recipient = $this->recipient();
        $sender = $this->sender();
        $formInputs = $this->employmentInputs();
        $view = 'emails.employment';
        $subject = 'Job Application';

        $this->mailer->sendTo($recipient, $sender, $subject, $view, $formInputs);

        return Redirect::back()->withSuccess('Your application was submitted. Thank you!');

    }


    /**
     * Process Comment's Form
     */
    public function comments()
    {
    	$rules = [
            'fullName' => 'required',
            'email'         =>  'required|email',
            'phone'    =>  'alpha_dash',
            'comment'     =>  'required',

        ];

        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validation->getMessageBag()->toArray()
            ]);
        }

        $this->commentModel->author = Input::get('fullName');
        $this->commentModel->body = Input::get('comment');
        $this->commentModel->visible = 0;
        $this->commentModel->save();

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
            'fullName' =>  Input::get('fullName'),
            'email' =>  Input::get('email'),
            'phone' =>  Input::get('phone'),
            'comment' =>Input::get('comment'),
            'subject'   => Input::get('subject')
        ];
    }

    private function franchiseInputs()
    {
        return $formInputs = [
            'fullName' =>  Input::get('fullName'),
            'email' =>  Input::get('email'),
            'phone' =>  Input::get('phone'),
            'purchaseDate' => Input::get('purchaseDate'),
            'city' => Input::get('city'),
            'state' => Input::get('state'),
            'amount' => Input::get('amount')
        ];
    }

    private function recipient()
    {
        $userArray = ['email'=>'rrafiatech@gmail.com','fullName'=>'Rachid Rafia'];
        return arrayToObject::execute($userArray);

    }
    private function franchiseRecipient()
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

    private function employmentInputs()
    {
        return $formInputs = [
            'position' =>  Input::get('position'),
            'startDate' =>  Input::get('startDate'),
            'firstName' =>  Input::get('firstName'),
            'lastName' =>  Input::get('lastName'),
            'email' =>  Input::get('email'),
            'phone' =>  Input::get('phone'),
            'additionalInfo' =>  Input::get('additionalInfo')
        ];
    }


}
