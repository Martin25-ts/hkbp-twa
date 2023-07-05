<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsGender extends Model
{
    use HasFactory;

    protected $table = 'ms_genders';
    protected $primaryKey = 'genderid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'genderid',
        'gender',
    ];

    public $timestamps = false;
}
