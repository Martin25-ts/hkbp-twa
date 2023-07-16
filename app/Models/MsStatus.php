<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsStatus extends Model
{
    use HasFactory;
    protected $table = 'ms_statuses';
    protected $primaryKey = 'statusid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'statusid',
        'status',
    ];

    public function jemaats()
    {
        return $this->hasMany(Jemaat::class, 'statusid');
    }


    public $timestamps = false;
}
