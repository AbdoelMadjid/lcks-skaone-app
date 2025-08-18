<?php

namespace App\Models\Konfigurasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppFitur extends Model
{
    use HasFactory;
    protected $table = 'app_fiturs';
    protected $fillable = [
        'nama_fitur',
        'aktif',
    ];
}
