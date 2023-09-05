<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;

    protected $table = 'jemaats';
    protected $primaryKey = 'jemaatid';
    public $timestamps = true;

    protected $fillable = [
        'jemaatimg',
        'jemaatfname',
        'jemaatlname',
        'jemaataddress',
        'jemaatzone',
        'genderid',
        'jemaatPOB',
        'jemaatDOB',
        'jemaatphone',
        'relationshipid',
        'positionid',
        'statusid'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'jemaatid');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'positionid');
    }


     // Relasi ke model Gender
     public function gender()
     {
         return $this->belongsTo(MsGender::class, 'genderid');
     }

     // Relasi ke model Relationship
     public function relationship()
     {
         return $this->belongsTo(MsRelationship::class, 'relationshipid');
     }

     // Relasi ke model Status
     public function status()
     {
         return $this->belongsTo(MsStatus::class, 'statusid');
     }
}
