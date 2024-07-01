<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    protected $table = 'kritiksaran';    
    protected $primaryKey = 'id_kritiksaran';

    protected $fillable = [
        'name',
        'pesan',
    ];
}
