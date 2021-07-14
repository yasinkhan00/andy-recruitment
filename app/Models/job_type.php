<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class job_type extends Model
{
    use SoftDeletes;

    protected $sequence = '';
    protected $table = 'job_type';
    protected $guarded = [];






    public function job_location()
    {
        return $this->hasOne(job_location::class,'job_id','job_id');
    }

    public function job_salary()
    {
        return $this->hasOne(job_salary::class,'job_id','job_id');
    }
    public function job_timing()
    {
        return $this->hasOne(job_timing::class,'job_id','job_id');
    }
    public function company_details()
    {
        return $this->hasOne(company_details::class,'job_id','job_id');
    }
    public function how_to_apply()
    {
        return $this->hasOne(how_to_apply::class,'job_id','job_id');
    }
    public function other_details()
    {
        return $this->hasOne(other_details::class,'job_id','job_id');
    }
    public function job_days()
    {
        return $this->hasOne(job_days::class,'job_id','job_id');
    }
    
}
