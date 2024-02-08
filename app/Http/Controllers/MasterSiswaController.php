<?php

namespace App\Http\Controllers;

use App\Models\MasterSiswa;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Post;
use LDAP\Result;
use Illuminate\Support\Facades\Hash;

use App\Exports\MasterSiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\MasterSiswaImport;

class MasterSiswaController extends Controller
{
    public function index()
    {
        // return view('admin.mastersiswa.index');
        // // $siswa = MasterSiswa::all();
        // $siswa = MasterSiswa::with('User')->paginate(2);

        // return view('siswa.index', compact('siswa'));

        $users = User::all(); 
        $mastersiswa = MasterSiswa::with('User')->paginate(2);
    

         return view('admin.mastersiswa.index', compact('mastersiswa','users'));
    }

    // public function listSiswa()
    // {
    //     $siswa = MasterSiswa::all();
    //     $data = array();
    //     $i = 1;
    //     foreach($siswa as $s)
    //     {
    //         $cari = User::where('nis', $s->nis)->first();

    //         $item['nomor_urut'] = $i;
    //         $item['nis'] = $s->nis;
    //         $item['name'] = $s->name;
    //         $item['jenkel'] = $s->jenkel;
    //         $item['kelas'] = $s->kelas;
    //         $item['jurusan'] = $s->jurusan;
    //         $item['semester'] = $s->semester;
    //         $item['tahunajar'] = $s->tahunajar;
    //         $item['email'] = $s->email;
    //         $data[] = $item;
    //         $i++;
    //     }

    //     return response()->json([
    //         'data' => $data,
    //     ], 200);
    // }

    public function listSiswa(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'user_id',
            3 => 'nik',
            4 => 'nisn',
            5 => 'nama_siswa',
            6 => 'tempat_lahir',
            7 => 'tgl_lahir',
            8 => 'jenkel',
            9 => 'agama',
            10 => 'nama_ayah',
            11 => 'nama_ibu',
            12 => 'pekerjaan_ayah',
            13 => 'pekerjaan_ibu',
            14 => 'alamat',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if(!in_array($orderColumn, $columns))
        {
            $orderColumn = 'nis';
        }
        $dir = $request->input('order.0.dir');
        
        //validasi nilai $dir
        if($dir !== 'asc' && $dir !== 'desc')
        {
            // jika nilai tidak sesuai, atur nilai default ke 'asc' atau 'desc'
            $dir = 'asc';
        }

        $search = $request->input('search') ? $request->input('search')['value'] : '';

        //hitung keseluruhan
        $hitung = MasterSiswa::count();

        $siswa = MasterSiswa::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('nik', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $siswa->skip($start);
        }
        $siswa = $siswa->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($siswa as $s)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $s->nis;
            $item['user_id'] = $s->user_id;
            $item['nik'] = $s->nik;
            $item['nisn'] = $s->nisn;
            $item['nama_siswa'] = $s->nama_siswa;
            $item['tempat_lahir'] = $s->tempat_lahir;
            $item['tgl_lahir'] = $s->tgl_lahir;
            $item['jenkel'] = $s->jenkel;
            $item['agama'] = $s->agama;
            $item['nama_ayah'] = $s->nama_ayah;
            $item['nama_ibu'] = $s->nama_ibu;
            $item['pekerjaan_ayah'] = $s->pekerjaan_ayah;
            $item['pekerjaan_ibu'] = $s->pekerjaan_ibu;
            $item['alamat'] = $s->alamat;

            $item['nis'] = $s->nis;
            $data[] = $item;
            $i++;
        }


        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data
        ],200);
    }

    public function addSiswa(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis' => 'required|string|max:15',
            'user_id'   => 'required',
            'nik' => 'required|string|max:18',
            'nisn' => 'required|string|max:15',
            'nama_siswa' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir'   => 'required|date',
            'jenkel'   => 'required|in:L,P',
            'agama' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $siswa = new MasterSiswa();
        $siswa->nis = $request->input('nis');
        $siswa->user_id = $request->input('user_id');
        $siswa->nik = $request->input('nik');
        $siswa->nisn = $request->input('nisn');
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->tgl_lahir = $request->input('tgl_lahir');
        $siswa->jenkel = $request->input('jenkel');
        $siswa->agama = $request->input('agama');
        $siswa->nama_ayah = $request->input('nama_ayah');
        $siswa->nama_ibu = $request->input('nama_ibu');
        $siswa->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $siswa->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $siswa->alamat = $request->input('alamat');
        $siswa->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data siswa',
            'data' => $siswa,
        ], 201);
        
    }

    public function updateSiswa (Request $request, $nis)
    {
        // $siswa = MasterSiswa::find($nis);
        $siswa = MasterSiswa::where('nis', $nis)->first();
        if (!$siswa)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data siswa tidak ditemukan',
            ], 404);
        }else{

            $validator = Validator::make($request->all(), [
                'nis' => 'required|string|max:15',
                'user_id'   => 'required',
                'nik' => 'required|string|max:18',
                'nisn' => 'required|string|max:15',
                'nama_siswa' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'tgl_lahir'   => 'required|date',
                'jenkel'   => 'required|in:L,P',
                'agama' => 'required|string|max:255',
                'nama_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
                'pekerjaan_ayah' => 'required|string|max:255',
                'pekerjaan_ibu' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
            ]);
            $siswa->nis = $request->nis;
            $siswa->user_id = $request->user_id;
            $siswa->nik = $request->nik;
            $siswa->nisn = $request->nisn;
            $siswa->nama_siswa = $request->nama_siswa;
            $siswa->tempat_lahir = $request->tempat_lahir;
            $siswa->tgl_lahir = $request->tgl_lahir;
            $siswa->jenkel = $request->jenkel;
            $siswa->agama = $request->agama;
            $siswa->nama_ayah = $request->nama_ayah;
            $siswa->nama_ibu = $request->nama_ibu;
            $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
            $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
            $siswa->alamat = $request->alamat;
            $siswa->update();

            return response()->json([
                'message' => 'Siswa updated successfully', 'siswa' => $siswa
            ]);
            dd($siswa);
        }
    }

    public function deleteSiswa ($id)
    {
        $siswa = MasterSiswa::find($id);
        $siswa->delete();
        return response()->json([
            'message' => 'Siswa deleted successfully'
        ]);
    }

    public function exportSiswa()
    {
        return Excel::download(new MasterSiswaExport, 'DataSiswa.xlsx');
    }

    public function importSiswa(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSiswa', $namaFile);

        Excel::import(new MasterSiswaImport , public_path('/DataSiswa/'.$namaFile));
        return \redirect()->back();
    }
}