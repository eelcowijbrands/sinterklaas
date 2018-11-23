<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $fillable = ['name'];
    

    /**
     * Get the user that owns the wish.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    } //
}
