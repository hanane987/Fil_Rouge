<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['name', 'discount', 'validityPeriodStart', 'validityPeriodEnd'];

    protected $dates = ['validityPeriodStart', 'validityPeriodEnd'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
