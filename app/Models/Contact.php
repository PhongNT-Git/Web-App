<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    public $timestamps = true;
    protected $fillable = ['addressee', 'subject', 'message' ,'completed'];
}