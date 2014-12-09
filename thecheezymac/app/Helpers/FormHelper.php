<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:57 PM
 */

class FormHelper {

    public static function delete($route, $id)
    {
        $form = Form::open(array('route' => array($route, $id), 'method' => 'delete')).'
                <button onclick="return confirm(\' Are you sure?\')" type="submit" href="'.URL::route($route, $id).'" class="btn btn-link btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
                '.Form::close();
        return $form;
    }

} 