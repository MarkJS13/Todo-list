<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDone extends Model
{
    use HasFactory;

    protected $table = 'task_done';
    protected $fillable =  ['title', 'timestarted', 'target_time_to_complete'];

}
