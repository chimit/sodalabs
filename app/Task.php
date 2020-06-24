<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    protected $casts = [
        'completed_at' => 'datetime',
    ];

    public function markCompleted()
    {
        $this->completed_at = now();
        $this->save();
    }

    public function markUncompleted()
    {
        $this->completed_at = null;
        $this->save();
    }
}
