<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetingModel extends Model
{
    use HasFactory;

    protected $table = 'seting';
    protected $fillable = [
        'start_delay_minning',
        'finish_delay_minning',
        'grouping',
        'start_delay_blash',
        'finish_delay_blash',
        'max_group_blash',
        'start_delay_group_blash',
        'finish_delay_group_blash',
        'delay_blash',
        'created_by',
        'updated_by',
    ];
}
