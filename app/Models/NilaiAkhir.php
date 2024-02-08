<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiAkhir extends Model
{
    use HasFactory;
    public $table = "nilai_akhirs";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nis', 'nilai_akhir', 'kelas_id', 'semester', 'tahun_ajar'
    ];

    public function MasterKelas(): HasMany
    {
        return $this->hasMany(MasterKelas::class, 'id');
    }

    public function MasterSiswa(): HasMany
    {
        return $this->hasMany(MasterSiswa::class, 'nis');
    }
}
