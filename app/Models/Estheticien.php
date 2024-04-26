<?php


namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estheticien extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'specialization', 'availability', 'description', 'image', 'work_name', 'price',
    ];

    protected $table = 'estheticiens';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
