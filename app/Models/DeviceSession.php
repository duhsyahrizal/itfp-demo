<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceSession extends Model
{
    protected $fillable = [
        'ip_address',
        'device_id',
        'platform',
        'model',
        'brand',
    ];
    
}
