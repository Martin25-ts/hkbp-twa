<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSunday extends Model
{
    use HasFactory;


    protected $table = 'sundays';
    protected $primaryKey = 'sundayid';



    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

}
