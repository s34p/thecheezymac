<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:57 PM
 */

class DisplayMessage {

    public static function sentryError($error = NULL)
    {
        if(!is_null($error))
        {

            echo '<div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">x</a>';
            echo $error;
            echo '</div>';

        }

    }

    public static function success($success = NULL)
    {
        if(!is_null($success))
        {
            echo '<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">x</a>';
            echo $success;
            echo '</div>';
        }
    }

    public static function error($field, $errors)
    {
        if($errors->any())
        {
            echo $errors->first($field,'<span class="text-danger">:message</span>');
        }
    }

    public static function mailchimpError($error)
    {
        if($error)
        {
            echo $error;
        }
    }

} 