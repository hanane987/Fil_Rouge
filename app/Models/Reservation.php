<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        
        
        'bookingConfirmation',
        'bookingTime',
        'first_name', // Added first_name
        'last_name', // Added last_name
        'email', // Added email
        'phone', // Added phone
        'service_id', // Added service_id
        'estheticien_id',
        'user_id' // Added estheticien_id
    ];
    protected $table = 'reservations';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estheticiene()
    {
        return $this->belongsTo(Estheticien::class,'estheticien_id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
