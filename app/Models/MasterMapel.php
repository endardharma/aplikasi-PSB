<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterMapel extends Model
{
    use HasFactory;
    public $table = "mastermapel";
    public $timestamps = true;
    protected $fillable = [
        'id', 'nama_mapel', 'kelompok_mapel', 'nama_nilai', 'user_id'
    ];

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }
}
