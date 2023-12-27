<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterGuru extends Model
{
    use HasFactory;
    public $table = "masterguru";
    public $timestamps = true;

    // protected $fillable =[
    //     'id',
    // ];
}

// $masterguru = new MasterGuru();
// $masterguru->nip = 'nilai_nip_yang_valid';
// $masterguru->name = 'name';
// $masterguru->jenkel = 'jenkel';
// $masterguru->status_pegawai = 'status_pegawai';
// $masterguru->jabatan = 'jabatan';
// $masterguru->is_active = 'is_active';
// $masterguru->email = 'email';
// $masterguru->password = 'password';

// // Set nilai untuk kolom-kolom lain jika diperlukan
// $masterguru->save();