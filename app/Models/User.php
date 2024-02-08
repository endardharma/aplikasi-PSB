<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // public $table = "users";
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table = "users";

    public $timestamps = true;
    protected $primaryKey = "id";

    public function role(): HasMany
    {
        return $this->hasMany(Role::class, 'id');
    }

    public function userDetail(): BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'nip');
    }

    public function MasterKelas(): BelongsTo
    {
        return $this->belongsTo(MasterKelas::class, 'id');
    }

    public function MasterKriteria(): BelongsTo
    {
        return $this->belongsTo(MasterKriteria::class, 'id');
    }

    public function MasterMapel(): BelongsTo
    {
        return $this->belongsTo(MasterMapel::class, 'id');
    }

    public function MasterSiswa(): BelongsTo
    {
        return $this->belongsTo(MasterSiswa::class, 'nis');
    }

    public function MasterJurusan(): BelongsTo
    {
        return $this->belongsTo(MasterJurusan::class, 'id');
    }
    
    public function NilaiAkhir(): BelongsTo
    {
        return $this->belongsTo(MasterJurusan::class, 'id');
    }

    public function NilaiSemuaKriteria(): BelongsTo
    {
        return $this->belongsTo(NilaiSemuaKriteria::class, 'id');
    }
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
