<?php

namespace TonyLaurent\LaravelEloquentSequencer\Tests\Models;

use TonyLaurent\LaravelEloquentSequencer\Traits\Sequenceable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use Sequenceable;

    protected $fillable = [
        'group_id',
        'position',
    ];

    public static $sequenceableKeys = [
        'group_id',
    ];
}
