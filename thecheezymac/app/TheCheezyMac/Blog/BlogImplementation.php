<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Blog;

class BlogImplementation implements BlogInterface{

    /**
     * @var Blog
     */
    private $blogModel;

    public function __construct(Blog $blogModel)
    {

        $this->blogModel = $blogModel;
    }

    public function add(array $inputs)
    {
        $this->blogModel->title = $inputs['title'];
        $this->blogModel->image = $inputs['image'];
        $this->blogModel->body = $inputs['body'];
        $this->blogModel->author = $inputs['author'];
        $this->blogModel->created_at = strtotime($inputs['created_at']);
        return $this->blogModel->save();
    }

    public function update(array $inputs, $blogId)
    {
        $blog = $this->blogModel->findOrFail($blogId);
        $blog->title = $inputs['title'];
        $blog->image = $inputs['image'];
        $blog->body = $inputs['body'];
        $blog->author = $inputs['author'];
        $blog->created_at = strtotime($inputs['created_at']);
        return $blog->save();
    }


} 