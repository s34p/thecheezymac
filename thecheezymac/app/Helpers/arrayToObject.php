<?php
/**
 * Created by PhpStorm.
 * User: rrafia
 * Date: 12/11/2014
 * Time: 3:25 PM
 */

class arrayToObject {

    public static function execute($array)
    {
        return json_decode(json_encode($array), FALSE);
    }

}