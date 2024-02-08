<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MasterSiswa extends Model
{
    use HasFactory;
    public $table = "mastersiswa";
    public $timestamps = true;
    protected $primaryKey = 'nis';

    protected $fillable = [
        'nis', 'user_id', 'nik', 'nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'jenkel', 'agama', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'alamat',
    ];

    public function KelasSiswa(): BelongsTo
    {
        return $this->belongsTo(KelasSiswa::class, 'id');
    }

    public function User(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }

    public function JurusanSiswa(): BelongsTo
    {
        return $this->belongsTo(JurusanSiswa::class, 'id');
    }

    public function NilaiRaport(): BelongsTo
    {
        return $this->belongsTo(NilaiRaport::class, 'id');
    }

    public function NilaiKetidakhadiran(): BelongsTo
    {
        return $this->belongsTo(NilaiKetidakhadiran::class, 'id');
    }

    public function NilaiSikap(): BelongsTo
    {
        return $this->belongsTo(NilaiSikap::class, 'id');
    }

    public function NilaiPrestasi(): BelongsTo
    {
        return $this->belongsTo(NilaiPrestasi::class, 'id');
    }

    public function NilaiKeterlambatan(): BelongsTo
    {
        return $this->belongsTo(NilaiKeterlambatan::class, 'id');
    }

    public function NilaiHafalan(): BelongsTo
    {
        return $this->belongsTo(NilaiHafalan::class, 'id');
    }
}