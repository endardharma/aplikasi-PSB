<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiSikap extends Model
{
    use HasFactory;
    public $table = "nilaisikap";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nis',
        'kelas_id', 
        'keterangan_sikap', 
        'nilai_sikap',
        'semester', 
        'tahun_ajar',
    ];

    public function MasterKelas(): HasMany
    {
        return $this->hasMany(MasterKelas::class, 'id');
    }

    public function MasterSiswa(): HasMany
    {
        return $this->hasMany(MasterSiswa::class, 'nis');
    }

    public function NilaiSemuaKriteria(): BelongsTo
    {
        return $this->belongsTo(NilaiSemuaKriteria::class, 'id');
    }

}
