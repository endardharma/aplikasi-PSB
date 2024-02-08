<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterKriteria extends Model
{
    use HasFactory;
    public $table = "masterkriteria";
    public $timestamps = true;
    protected $primaryKey = "kode_kriteria";
    protected $fillable = [
        'kode_kriteria', 'nama_kriteria', 'bobot_kriteria', 'bobot_kriteria', 'atribut_kriteria', 'kelas', 'jurusan', 'semester', 'tahun_ajar',
    ];

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }

    public function PeriodeKriteria(): HasMany
    {
        return $this->hasMany(PeriodeKriteria::class, 'id');
    }
}
