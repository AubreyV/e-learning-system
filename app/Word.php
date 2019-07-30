<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * Inside $guarded should be attributes that aren't mass assignable.
     *
     * [] => means empty, so every attribute is mass assignable.
     */
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
