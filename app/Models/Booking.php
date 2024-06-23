<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'Bookings';
    protected $primaryKey = 'id_booking';

    protected $fillable = [
        'name',
        'email',
        'notlp',
        'tanggal',
        'jam',
        'id_paket',
        'id_category'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id_paket');
    }
}
