<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    protected $fillable = ['title', 'description', 'timestarted', 'target_time_to_complete', 'user_id'];

    public function user()  {
        return $this->belongsTo(User::class);
    }

}
