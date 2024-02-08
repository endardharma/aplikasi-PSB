<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    public $table = 'masterguru'; // Sesuaikan dengan nama tabel di database Anda
    protected $primaryKey = 'id'; // Sesuaikan dengan nama primary key di tabel Anda jika beda

    // Definisikan kolom yang dapat diisi (fillable) jika perlu
    protected $fillable = [
        'nip', 'nama_guru', 'jenkel', 'status_pegawai', 'jabatan', 'is_active'
        // Tambahkan atribut lainnya jika perlu
    ];
}
