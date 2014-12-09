<?php

use TheCheezyMac\Users\UserManagement\CreateValidation;
use TheCheezyMac\Users\UserManagement\UserManagementInterface;
use TheCheezyMac\Users\User;

class UsersController extends \BaseController {

	protected $layout = "public.layout.default";
    /**
     * @var CreateValidation
     */
    private $createValidation;
	/**
	 * @var UserManagementInterface
	 */
	private $userManagement;
	/**
	 * @var User
	 */
	private $userModel;
	/**
	 * @var EditValidation
	 */
	private $editValidation;


	public function __construct(CreateValidation $createValidation, UserManagementInterface $userManagement, User $userModel)
    {

        $this->createValidation = $createValidation;
		$this->userManagement = $userManagement;
		$this->userModel = $userModel;
	}

    /**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userModel->orderBy('first_name')->get();

		$this->layout->content = View::make('private.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->createValidation->validate(Input::all());

		return $this->userManagement->add(Input::all());

	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->userModel->findOrFail($id);

		$this->layout->content = View::make('private.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{


		$rules = [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|email|unique:users,email,'.$id,
		];

		$validation = Validator::make(Input::all(),$rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}

		return $this->userManagement->update(Input::all(), $id);


	}

	public function updatePassword($id)
	{


		$rules = [
			'password'=>'required|confirmed|min:8',
        	'password_confirmation'=>'required',
		];

		$validation = Validator::make(Input::all(),$rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}

		return $this->userManagement->updatePassword(Input::all(), $id);


	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->userModel->destroy($id) ?
			Redirect::back()->withSuccess('User has been removed successfully') :
			Redirect::back()->withErrors('User was not removed due to technical problems. Please try again.');


	}

}