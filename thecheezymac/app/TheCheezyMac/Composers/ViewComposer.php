<?php
/**
 * Created by PhpStorm.
 * User: rrafia
 * Date: 12/17/2014
 * Time: 11:33 AM
 */

namespace TheCheezyMac\Composers;


use TheCheezyMac\Comments\Comments;

class ViewComposer {

    /**
     * @var Comments
     */
    private $commentsModel;

    public function __construct(Comments $commentsModel)
    {

        $this->commentsModel = $commentsModel;
    }

    public function compose($view)
    {
        $view->with('comments', $this->comments());
    }

    private function comments()
    {
        return $this->commentsModel->where('visible','=',1)->get();
    }


}