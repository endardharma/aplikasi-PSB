<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterJurusan extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    public $table = 'master_jurusans';
    protected $fillable = [
        'id', 'nama_jurusan', 'user_id'
    ];

    public function JurusanSiswa(): BelongsTo
    {
        return $this->belongsTo(JurusanSiswa::class, 'id');
    }

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }

}
