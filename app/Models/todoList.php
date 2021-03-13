<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoList extends Model
{
    protected $fillable =
    [
        'task_name',
        'start_date',
        'end_date',
        'status'
    ];
    use HasFactory;
}
