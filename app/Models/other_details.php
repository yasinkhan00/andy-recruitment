<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class other_details extends Model
{
    use SoftDeletes;

    protected $sequence = '';
    protected $table = 'other_details';
    protected $guarded = [];
}
