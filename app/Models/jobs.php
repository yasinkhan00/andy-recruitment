<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
     protected $table = 'job';


public function job_category()
    {
        return $this->hasOne(job_category::class,'id','job_cat');
    }

    public function job_location()
    {
        return $this->hasOne(job_location::class,'job_id','id');
    }

    public function job_salary()
    {
        return $this->hasOne(job_salary::class,'job_id','id');
    }
    public function job_timing()
    {
        return $this->hasOne(job_timing::class,'job_id','id');
    }
    public function company_details()
    {
        return $this->hasOne(company_details::class,'job_id','id');
    }
    public function how_to_apply()
    {
        return $this->hasOne(how_to_apply::class,'job_id','id');
    }
    public function other_details()
    {
        return $this->hasOne(other_details::class,'job_id','id');
    }
    public function job_days()
    {
        return $this->hasOne(job_days::class,'job_id','id');
    }
    public function job_type()
    {
        return $this->hasOne(job_type::class,'job_id','id');
    }


}