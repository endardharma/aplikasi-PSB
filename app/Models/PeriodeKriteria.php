<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PeriodeKriteria extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    public $table = 'periode_kriterias';
    public $timestamps = true;
    protected $fillable = [
        'id', 'kode_kriteria', 'bobot_kriteira', 'semester', 'tahun_ajar'
    ];

    public function MasterKriteria(): BelongsTo
    {
        return $this->belongsTo(MasterKriteria::class, 'kode_kriteria', 'kode_kriteria');
    }
}
