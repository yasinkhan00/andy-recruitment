<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class job_location extends Model
{
    use SoftDeletes;

    protected $sequence = '';
    protected $table = 'job_location';
    protected $guarded = [];
}
