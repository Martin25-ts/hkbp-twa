<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $primaryKey = 'beritaid';

    protected $fillable = [
        'userid',
        'beritaimage',
        'beritatitle',
        'beritadeskripsi',
        'beritatime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

}
