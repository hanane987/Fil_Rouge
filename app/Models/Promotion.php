<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    protected $fillable = ['name', 'discount', 'validityPeriodStart', 'validityPeriodEnd','service_id'];

    protected $dates = ['validityPeriodStart', 'validityPeriodEnd'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
