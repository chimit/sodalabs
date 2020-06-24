<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    protected $casts = [
        'completed' => 'boolean',
    ];

    public function markCompleted()
    {
        $this->completed = true;
        $this->save();
    }

    public function markUncompleted()
    {
        $this->completed = false;
        $this->save();
    }
}
