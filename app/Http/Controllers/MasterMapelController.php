<?php

namespace App\Http\Controllers;

use App\Models\MasterMapel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MasterMapelController extends Controller
{
    public function index()
    {
        return view('admin.mastermapel.index');
    }

    public function listMapel(){
        $mapel = MasterMapel::all();
        $data = array();
        $i = 1;
        foreach($mapel as $m)
        {
            $item['nomor_urut'] = $i;
            $item['name'] = $m->name;
            $item['kelompok_mapel'] = $m->kelompok_mapel;
            $item['name_nilai'] = $m->name_nilai;
            $item['jurusan'] = $m->jurusan;
            $data[] = $item;
            $i++;
        }

        return response()->json([
            'data' => $data,
        ], 200);
    }

}
