<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [];
    
//    protected static function newFactory()
//    {
//        return \Modules\Admin\Database\factories\UserFactory::new();
//    }


}
