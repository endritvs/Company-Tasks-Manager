<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use App\Models\Task;

class Project extends Model
{
    protected $fillable = [
        'name',
        'status',
        'startDate',
        'endDate',
        'user_id',
        'bio'
    ];

    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}