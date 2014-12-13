<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:03 PM
 */

namespace TheCheezyMac\Blog;


interface BlogInterface {

    public function add(array $inputs);

    public function update(array $inputs, $blogId);
} 