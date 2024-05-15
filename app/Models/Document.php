<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
    ];

    public function section()
    {
        return $this->belongTo(Section::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
