<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Inside $guarded should be attributes that aren't mass assignable.
     *
     * [] => means empty, so every attribute is mass assignable.
     */
    protected $guarded = [];
}
