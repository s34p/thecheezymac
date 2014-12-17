<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Comments;

class CommentsImplementation implements CommentsInterface{

    /**
     * @var Comments
     */
    private $commentsModel;

    public function __construct(Comments $commentsModel)
    {

        $this->commentsModel = $commentsModel;
    }

    public function add(array $inputs)
    {
        $this->commentsModel->body = $inputs['body'];
        $this->commentsModel->visible = $inputs['visible'];
        $this->commentsModel->author = $inputs['author'];
        return $this->commentsModel->save();
    }

    public function update(array $inputs, $commentsId)
    {
        $comments = $this->commentsModel->findOrFail($commentsId);
        $comments->body = $inputs['body'];
        $comments->visible = $inputs['visible'];
        $comments->author = $inputs['author'];
        return $comments->save();
    }


} 