<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $table = "connections";

    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'common_connections', 'is_common_connect', 'status'
    ];

    protected $casts = [
        'common_connections' => 'json'
    ];
}
