<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiveRequest extends Model
{
    use HasFactory;

    protected $table = "receive_requests";

    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'status'
    ];
}
