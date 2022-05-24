<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'company';

    protected $fillable = [

    ];

    public function customer()
    {
        return $this->hasMany(Customer::class,'company_id' );
    }

}
