<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{

    protected $table ='students';
    protected $primarykey ='id';
    protected $fillable =['name','address','mobile'] ;
    use HasFactory;
}
