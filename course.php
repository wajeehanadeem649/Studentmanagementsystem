<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    protected $table ='courses';
    protected $primarykey ='id';
    protected $fillable =['name','syllabus','duration'] ;
    use HasFactory;
}
