<?php

use TheCheezyMac\NewsLetters\NewsLetterListInterface;
use TheCheezyMac\NewsLetters\NewsLetterListValidation;
use TheCheezyMac\NewsLetters\Notification\EmailSubscribersInterface;
use TheCheezyMac\NewsLetters\Notification\EmailSubscribersValidation;

class NewsLetterController extends \BaseController {

	protected $layout = "public.layout.default";

	/**
	 * @var NewsLetterListInterface
	 */
	private $newsLetterListInterface;
	/**
	 * @var NewsLetterListValidation
	 */
	private $newsLetterListValidation;
	/**
	 * @var EmailSubscribersValidation
	 */
	private $emailSubscribersValidation;
	/**
	 * @var EmailSubscribersInterface
	 */
	private $emailSubscribersInterface;

	/**
	 * @param NewsLetterListValidation $newsLetterListValidation
	 * @param NewsLetterListInterface $newsLetterListInterface
	 * @param EmailSubscribersValidation $emailSubscribersValidation
	 * @param EmailSubscribersInterface $emailSubscribersInterface
	 * @internal param $ \TheCheezyMac\NewsLetters\NewsLetterListInterface $
	 */
	public function __construct(NewsLetterListValidation $newsLetterListValidation,NewsLetterListInterface $newsLetterListInterface, EmailSubscribersValidation $emailSubscribersValidation, EmailSubscribersInterface $emailSubscribersInterface)
	{

		$this->newsLetterListInterface = $newsLetterListInterface;
		$this->newsLetterListValidation = $newsLetterListValidation;
		$this->emailSubscribersValidation = $emailSubscribersValidation;
		$this->emailSubscribersInterface = $emailSubscribersInterface;
	}

	public function Subscribe()
	{
		$this->newsLetterListValidation->validate(Input::all());

		$this->newsLetterListInterface->subscribeTo('Subscribers',Input::all());

		return Redirect::back()->withSuccess('You have subscribed Successfully. Thank you');
	}


//	public function unsubscribe($encryptedEmail)
//	{
//
//		$email = Crypt::decrypt($encryptedEmail);
//
//		dd($email);
//
//		$this->newsLetterListInterface->subscribeTo('Subscribers',Input::all());
//
//		return Redirect::to('/club')->withSuccess('Thank you');
//
//	}

	public function send()
	{
		$this->layout->content = View::make('private.newsletters.create');
	}

	public function postSend()
	{
		$this->emailSubscribersValidation->validate(Input::all());

//		$data = [
//			'title' => Input::get('title'),
//			'body'	=> Input::get('body')
//		];
//		$body = View::make('emails.newsletter', $data)->render();
//
//		$this->emailSubscribersInterface->notify(Input::get('title'), $body);
		$this->emailSubscribersInterface->notify(Input::get('title'), Input::get('body'));

		return Redirect::back()->withSuccess('Email was send');
	}

}