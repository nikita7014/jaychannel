<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Credits extends Model
{

    use HasFactory;

    protected $table = 'credits';

    /**
     * Get the User that owns the Credits.
     */
    /*public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id')->withTrashed();
    }*/

    /**
     * Get the Status that owns the Credits.
     */
    /*public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }*/
}
