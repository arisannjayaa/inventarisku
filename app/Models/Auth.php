<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
{
    protected $table      = 'tb_user';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
}
