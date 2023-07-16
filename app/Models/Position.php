<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'ms_positions';
    protected $primaryKey = 'positionid';
    public $timestamps = false;

    protected $fillable = [
        'positionid',
        'position'
    ];

    // Relasi ke model Jemaat
    public function jemaats()
    {
        return $this->hasMany(Jemaat::class, 'positionid');
    }
}
