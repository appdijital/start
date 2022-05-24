<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';

    protected $fillable = [

    ];

    public function customer()
    {
        return $this->hasMany(Customer::class,'company_id' );
    }
    public function customer_yas($id1)
    {
        return $this->hasMany(Customer::class,'company_id' )->where('birth_date','>',$id1);
    }


    public function customer_iki()
    {
        return $this->hasMany(Customer::class,'company_id' );
    }

}
