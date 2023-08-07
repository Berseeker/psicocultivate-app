<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanbanStatus extends Model
{
    use HasFactory;

    protected $table = 'kanban_status';

    public function events()
    {
      return $this->hasMany(Kanban::class);
    }
}
