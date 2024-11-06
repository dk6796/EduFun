<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'CategoryID', 'id');
    }

    public function article(){
        return $this->hasMany(Article::class, 'SubjectID', 'id');
    }
}
