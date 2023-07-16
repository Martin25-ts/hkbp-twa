<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'userid';
    public $timestamps = true;

    protected $fillable = [
        'jemaatid',
        'useremail',
        'userpassword',
        'roleid',
    ];

    // Relationship dengan tabel MsGender
    public function jemaat()
    {
        return $this->belongsTo(Jemaat::class, 'jemaatid');
    }

    // Relasi ke model Role
    public function role()
    {
        return $this->belongsTo(MsRole::class, 'roleid');
    }


    /**
     *
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'passwordaccount',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
