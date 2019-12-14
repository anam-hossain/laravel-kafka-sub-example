<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inventory_id',
        'make',
        'model'
    ];
}
