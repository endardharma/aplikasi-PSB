<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserDetail extends Model
{
    use HasFactory;
    public $table = "user_details";
    public $timestamps = true;
    // protected $primarykey = 'nip';
    protected $primaryKey = 'nip';
    protected $fillable = [
        'nip', 'user_id', 'jenkel', 'tgl_lahir', 'no_telp', 'alamat', 'status_user', 'is_active',
    ];

    public function User(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }
}
