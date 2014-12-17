<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Gallery;

class GalleryImplementation implements GalleryInterface{

    /**
     * @var Gallery
     */
    private $galleryModel;

    public function __construct(Gallery $galleryModel)
    {

        $this->galleryModel = $galleryModel;
    }

    public function add(array $inputs)
    {
        $this->galleryModel->caption = $inputs['caption'];
        $this->galleryModel->image = $inputs['image'];
        return $this->galleryModel->save();
    }

    public function update(array $inputs, $galleryId)
    {
        $gallery = $this->galleryModel->findOrFail($galleryId);
        $gallery->caption = $inputs['caption'];
        $gallery->image = $inputs['image'];
        return $gallery->save();
    }


} 