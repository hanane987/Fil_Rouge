<?php

namespace App\Models;

use App\Models\Estheticien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class estheticien_service extends Model
{
    use HasFactory;

   protected $fillable=['first_name','user_id','service_id'];
   protected $table='estheticien_services';

   public function estheticienn()
   {
       return $this->belongsTo(Estheticien::class,'user_id');
   }
}
