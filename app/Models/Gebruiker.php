<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    use HasFactory;

    protected $table = 'gebruikers';
    protected $fillable = ['nummer', 'naam', 'woonplaats'];
}
