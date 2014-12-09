<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:03 PM
 */

namespace TheCheezyMac\Users\UserManagement;


interface UserManagementInterface {

    public function add(array $inputs);

    public function update(array $inputs, $userId);

    public function updatePassword(array $inputs, $userId);

} 