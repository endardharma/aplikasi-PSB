<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiSemuaKriteria extends Model
{
    use HasFactory;
    public $table = "nilai_semua_kriterias";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nis', 'nilairaport_id', 'nilaisikap_id', 'nilaiketidakhadiran_id', 'nilaiketerlambatan_id', 'nilaihafalan_id', 'semester', 'tahun_ajar'
    ];

    // public function MasterKelas(): HasMany
    // {
    //     return $this->hasMany(MasterKelas::class, 'id');
    // }

    public function MasterSiswa(): HasMany
    {
        return $this->hasMany(MasterSiswa::class, 'nis');
    }

    public function NilaiRaport(): HasMany
    {
        return $this->hasMany(NilaiRaport::class, 'id');
    }

    public function NilaiKetidakhadiran(): HasMany
    {
        return $this->hasMany(NilaiKetidakhadiran::class, 'id');
    }

    public function NilaiSikap(): HasMany
    {
        return $this->hasMany(NilaiSikap::class, 'id');
    }

    public function NilaiPrestasi(): HasMany
    {
        return $this->hasMany(NilaiPrestasi::class, 'id');
    }

    public function NilaiKeterlambatan(): HasMany
    {
        return $this->hasMany(NilaiKeterlambatan::class, 'id');
    }

    public function NilaiHafalan(): HasMany
    {
        return $this->hasMany(NilaiHafalan::class, 'id');
    }

}
