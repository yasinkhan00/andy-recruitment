<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class job_salary extends Model
{
    use SoftDeletes;

    protected $sequence = '';
    protected $table = 'job_salary';
    protected $guarded = [];
}