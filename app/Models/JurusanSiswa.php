<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JurusanSiswa extends Model
{
    use HasFactory;
    public $table = 'jurusan_siswas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id', 'nis', 'jurusan_id'
    ];

    public function MasterJurusan(): HasMany
    {
        return $this->hasMany(MasterJurusan::class, 'id', 'jurusan_id');
    }

    public function MasterSiswa(): HasMany
    {
        return $this->hasMany(MasterSiswa::class, 'nis');
    }
}
