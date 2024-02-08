<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NilaiRaport extends Model
{
    use HasFactory;
    public $table = "nilairaport";
    public $timestamps = true;
    protected $fillable = [
        'nis', 'kelas_id', 'png_pai', 'png_ppkn', 'png_bind', 'png_mtk_umum', 'png_sjr_indo', 'png_bing', 'png_senbud', 'png_penjaskes', 'png_pkwu', 'png_bhs_daerah', 'png_mtk_peminatan', 'png_fisika', 'png_kimia', 'png_biologi', 'png_fiqih', 'png_bhs_arab', 'png_conversation', 'png_ekonomi', 'ktr_pai', 'ktr_ppkn', 'ktr_bind', 'ktr_mtk_umum', 'ktr_sjr_indo', 'ktr_bing', 'ktr_senbud', 'ktr_penjaskes', 'ktr_pkwu', 'ktr_bhs_daerah', 'ktr_mtk_peminatan', 'ktr_fisika', 'ktr_kimia', 'ktr_biologi', 'ktr_fiqih', 'ktr_bhs_arab', 'ktr_conversation', 'ktr_ekonomi', 'nilai_pengetahuan', 'nilai_keterampilan', 'nilai_raport', 'semester', 'tahun_ajar'
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
