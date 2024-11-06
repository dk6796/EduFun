<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function writer(){
        return $this->belongsTo(Writer::class, 'WriterID', 'id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'SubjectID', 'id');
    }
}
