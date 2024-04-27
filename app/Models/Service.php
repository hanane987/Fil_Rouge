<?php

namespace App\Models;

use App\Models\Promotion;
use App\Models\Estheticien;
use App\Models\estheticien_service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'price', 'duration','image'];
    protected $table = 'services';

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
    public function estheticien()
    {
        return $this->HasMany(estheticien_service::class,'service_id');
    }
}
