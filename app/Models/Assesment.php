<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'image',
        'question_id',
        'user_id'
    ];
}
