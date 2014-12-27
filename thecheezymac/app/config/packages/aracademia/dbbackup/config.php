<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/24/2014
 * Time: 10:38 PM
 */

return [
    'DbName' => getenv("DB_NAME"), // Database Name
    'DbUser' => getenv("DB_USERNAME"), // Database User
    'DbPass' => getenv("DB_PASSWORD"), // Database Password
    'DbHost' => 'localhost', // Database Host
    'DbMysqlDumpPath' => 'mysqldump', // Path to your mysqldump
    'DbBackupPath' => app_path().'/storage/DbBackup' // Path to your backup location
];