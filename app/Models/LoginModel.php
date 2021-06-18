<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'codigos';
    protected $fillable = array('id', 'codigo');
}
