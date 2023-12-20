<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
    use HasFactory;
    protected $table = 'alerts'; // add this line if the table name is different
    protected $fillable = [
        'name',
        'messages',
    ];
}
