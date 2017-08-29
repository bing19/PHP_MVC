<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 29.08.17
 * Time: 22:08
 */

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'Users';
    public $user_name;
    public $user_lastname;

}