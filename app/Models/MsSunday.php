<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSunday extends Model
{
    use HasFactory;


    protected $table = 'ms_sundays';
    protected $primaryKey = 'sundayid';



    public function account()
    {
        return $this->belongsTo(MsAccount::class, 'accountid');
    }
}
