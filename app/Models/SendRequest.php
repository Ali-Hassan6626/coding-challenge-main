<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendRequest extends Model
{
    use HasFactory;

    protected $table = "send_requests";

    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'status'
    ];
}
