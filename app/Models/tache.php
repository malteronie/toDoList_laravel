<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;
    protected $table = 'email';
    protected $fillable = [
        'content',
        'from_mail','to_mail',
        'content',
        'object',
        'type',
        'created_at',
        'read_at'
    ];
    
    protected $dates = ['created-at',];
    
}
