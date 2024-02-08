<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KelasSiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'kelas_siswas';
    protected $fillabe = 
    [
        'id', 'nis', 'kelas_id'
    ];

    public function MasterKelas(): HasMany
    {
        return $this->hasMany(MasterKelas::class, 'id', 'kelas_id');
    }

    public function MasterSiswa(): HasMany
    {
        return $this->hasMany(MasterSiswa::class, 'nis');
    }
}
