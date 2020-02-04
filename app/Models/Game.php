<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $visible = ['id', 'name', 'publisher', 'release_date'];
}
