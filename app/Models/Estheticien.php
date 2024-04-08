<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estheticien extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'specialization', 'availability', 'description', 'image', 'work_name', 'price',
    ];
}
