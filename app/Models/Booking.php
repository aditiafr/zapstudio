<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    protected $table = 'Bookings';

    protected $fillable = [
        'name',
        'email',
        'notlp',
        'tanggal',
        'jam',
        'paket',
        'category'
    ];
}
