<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsRole extends Model
{
    use HasFactory;
    protected $table = 'ms_roles';
    protected $primaryKey = 'roleid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'roleid',
        'role',
    ];



    public $timestamps = false;
}
