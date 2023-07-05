<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsRelationship extends Model
{
    use HasFactory;

    protected $table = 'ms_relationships';

    protected $primaryKey = 'relationshipid';

    public $incrementing = false;

    protected $fillable = [
        'relationshipid',
        'relationship',
    ];

    public $timestamps = false; // Nonaktifkan timestamps
}
