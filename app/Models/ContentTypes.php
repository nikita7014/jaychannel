<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentTypes extends Model
{

    use HasFactory;

    protected $table = 'content_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function Courses(){
        return $this->hasMany('App\Models\Courses', 'content_type_id');
    }        
}
