<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsAccount extends Model
{
    use HasFactory;


    protected $table = 'ms_accounts';
    protected $primaryKey = 'accountid';

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function role()
    {
        return $this->belongsTo(MsRole::class, 'roleid');
    }

    public function sundays()
    {
        return $this->hasMany(MsSunday::class, 'sundayid');
    }
}
