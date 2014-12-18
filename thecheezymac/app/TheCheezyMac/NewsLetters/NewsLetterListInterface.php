<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/17/2014
 * Time: 8:38 PM
 */

namespace TheCheezyMac\NewsLetters;


interface NewsLetterListInterface {

    /**
     * @param $listID
     * @param $email
     * @return mixed
     */
    public function subscribeTo($listName, array $inputs);

    /**
     * @param $listID
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($listID, $email);

}