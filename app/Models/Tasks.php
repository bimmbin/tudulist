<?php

namespace App\Models;

use App\Models\Finished;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'status'
    ];

    public function isFinished()
    {
        return $this->hasOne(Finished::class);
    }
}
