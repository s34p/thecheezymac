<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Pages;

class PagesImplementation implements PagesInterface{

    /**
     * @var Pages
     */
    private $pagesModel;

    public function __construct(Pages $pagesModel)
    {

        $this->pagesModel = $pagesModel;
    }

//    public function add(array $inputs)
//    {
//        $this->pagesModel->title = $inputs['title'];
//        $this->pagesModel->body = $inputs['body'];
//        $this->pagesModel->author = $inputs['author'];
//        $this->pagesModel->created_at = strtotime($inputs['created_at']);
//        return $this->pagesModel->save();
//    }

    public function update(array $inputs, $pageId)
    {
        $pages = $this->pagesModel->find($pageId);
        $pages->title = $inputs['title'];
        $pages->body = $inputs['body'];
        $pages->image = $inputs['image'];
        $pages->col_num = $inputs['col_num'];
//        $pages->edited_by = $inputs['author'];
        return $pages->save();
    }


} 