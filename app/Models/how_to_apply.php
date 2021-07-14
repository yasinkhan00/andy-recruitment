<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class how_to_apply extends Model
{
    use SoftDeletes;

    protected $sequence = '';
    protected $table = 'how_to_apply';
    protected $guarded = [];
}
