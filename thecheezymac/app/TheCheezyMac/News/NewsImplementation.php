<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\News;

class NewsImplementation implements NewsInterface{

    /**
     * @var News
     */
    private $newsModel;

    public function __construct(News $newsModel)
    {

        $this->newsModel = $newsModel;
    }

    public function add(array $inputs)
    {
        $this->newsModel->title = $inputs['title'];
        $this->newsModel->body = $inputs['body'];
        return $this->newsModel->save();
    }

    public function update(array $inputs, $newsId)
    {
        $news = $this->newsModel->findOrFail($newsId);
        $news->title = $inputs['title'];
        $news->body = $inputs['body'];
        return $news->save();
    }


} 