<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    use HasFactory;

    protected $connection = 'mysql_base';

    protected $table = 'flight';

    protected $fillable = ['name', 'destination'];
    
    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\FlightFactory::new();
    }


}
