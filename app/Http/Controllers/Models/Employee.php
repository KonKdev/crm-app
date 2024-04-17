<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
