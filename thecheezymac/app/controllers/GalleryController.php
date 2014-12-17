<?php

use TheCheezyMac\Gallery\Gallery;
use TheCheezyMac\Gallery\GalleryInterface;
use TheCheezyMac\Gallery\GalleryValidation;

class GalleryController extends \BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var Gallery
     */
    private $galleryModel;
    /**
     * @var GalleryValidation
     */
    private $galleryValidation;
    /**
     * @var GalleryInterface
     */
    private $galleryInterface;


	public function __construct(Gallery $galleryModel, GalleryValidation $galleryValidation, GalleryInterface $galleryInterface)
	{

        $this->galleryModel = $galleryModel;
        $this->galleryValidation = $galleryValidation;
        $this->galleryInterface = $galleryInterface;
	}


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$images = $this->galleryModel->orderBy('caption')->get();

        $this->layout->content = View::make('private.gallery.index', compact('images'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.gallery.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->galleryValidation->validate(Input::all());

        $this->galleryInterface->add(Input::all());

        return Redirect::to('/webadmin/gallery')->withSuccess('Image was added successfully');

	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = $this->galleryModel->findOrFail($id);

		$this->layout->content = View::make('private.gallery.edit',compact('image'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->galleryValidation->validate(Input::all());

        $this->galleryInterface->update(Input::all(), $id);

        return Redirect::to('/webadmin/gallery')->withSuccess('Image was updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->galleryModel->destroy($id);

        return Redirect::back()->withSuccess('Image was deleted!');
	}


    public function getAll()
    {
		$images = $this->galleryModel->orderBy('created_at','DESC')->get();
        $this->layout->content = View::make('public.gallery',compact('images'));
    }

}
