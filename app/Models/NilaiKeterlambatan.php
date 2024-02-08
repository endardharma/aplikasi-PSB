<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiKeterlambatan extends Model
{
    use HasFactory;
    public $table = "nilaiketerlambatan";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nis',
        'kelas_id', 
        'jumlah_keterlambatan', 
        'nilai_keterlambatan', 
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
