<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    // Specify the table name (optional, if not using the default)
    protected $table = 'todos';

    // Fields that can be mass-assigned
    protected $fillable = ['title', 'description', 'completed'];

    // Default values for fields
    protected $attributes = [
        'completed' => false,
    ];
}
