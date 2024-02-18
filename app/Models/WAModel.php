<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WAModel extends Model
{
    use HasFactory;
    protected $table = 'm_wa';
    protected $fillable = [
        'name',
        'port',
        'ip',
        'phone',
        'status',
        'description',
        'created_by',
        'updated_by'
    ];
}
