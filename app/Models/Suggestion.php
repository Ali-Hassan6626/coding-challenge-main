<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $table = "suggestions";

    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'status'
    ];
}
