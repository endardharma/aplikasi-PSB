<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterKelas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $table = "master_kelas";
    public $timestamps = true;
    protected $fillable = [
        'id', 'nama_kelas', 'user_id',
    ];

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }

    public function KelasSiswa(): BelongsTo
    {
        return $this->belongsTo(KelasSiswa::class, 'id');
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
    
    public function NilaiAkhir(): BelongsTo
    {
        return $this->belongsTo(NilaiHafalan::class, 'id');
    }

    public function NilaiSemuaKriteria(): BelongsTo
    {
        return $this->belongsTo(NilaiSemuaKriteria::class, 'id');
    }
}

