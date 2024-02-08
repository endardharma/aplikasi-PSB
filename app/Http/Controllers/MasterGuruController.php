<?php

namespace App\Http\Controllers;

use App\Models\MasterGuru;
use App\Models\UserDetail;
use App\Models\User;
use App\Models\Guru;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Post;
use LDAP\Result;
use Illuminate\Support\Facades\Auth;

class MasterGuruController extends Controller
{
    public function index()
    {
        return view('admin.masterguru.index');
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    // public function listGuru(Request $request)
    // {
    //     $guru = MasterGuru::all();
    //     $data = array();
    //     $i = 1;
    //     foreach($guru as $g)
    //     {
    //         // $cari = User::where('nip',$g->nip)->first();

    //         $item['nomor_urut'] = $i;
    //         $item['nip'] = $g->nip;
    //         $item['nama_guru'] = $g->nama_guru;
    //         $item['jenkel'] = $g->jenkel;
    //         $item['status_pegawai'] = $g->status_pegawai;
    //         // $item['jabatan'] = $g->jabatan == 1 ? 'Team IT' : 'Wali Kelas' : 'Guru BK' : 'Admin Raport' : 'Bagian Kurikulum' : 'Bagian Tata Usaha' : 'Guru Agama' : 'Siswa-Siswi'; 
    //         $item['jabatan'] = match ($g->jabatan) {
    //             1 => 'Team IT',
    //             2 => 'Wali Kelas',
    //             3 => 'Guru BK',
    //             4 => 'Admin Raport',
    //             5 => 'Bagian Kurikulum',
    //             6 => 'Bagian Tata Usaha',
    //             7 => 'Guru Agama',
    //             default => 'Siswa-Siswi',
    //         }; 
    //         $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Non-Aktif';
    //         $data[] = $item;
    //         $i++;
    //     }

    //     return response()->json([
    //         'data' => $data,
    //     ],200);
    // }

    public function listGuru(Request $request)
    {
        $columns = [
            0 => 'nomer_urut',
            1 => 'nip',
            2 => 'nama_guru',
            3 => 'jenkel',
            4 => 'status_pegawai',
            5 => 'jabatan',
            6 => 'is_active',
            7 => 'id',
        
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if (!in_array($orderColumn, $columns)) {
            // Kolom urutan tidak valid, atur ke nilai default
            $orderColumn = 'id'; // Atau sesuaikan dengan kolom default yang valid
        }
        $dir = $request->input('order.0.dir');
        
        // Validasi nilai $dir
        if ($dir !== 'asc' && $dir !== 'desc') {
            // Jika nilai tidak sesuai, atur nilai default ke 'asc' atau 'desc'
            $dir = 'asc'; // Atau Anda bisa menetapkan nilai default lain yang sesuai
        }
        
        // $search = $request->input('search')['value'];
        $search = $request->input('search') ? $request->input('search')['value'] : '';

        // Hitunga keseluruhan
        $hitung = MasterGuru::count();

        $guru = MasterGuru::where(function ($q) use ($search) {
            if($search != null)
            {
                return $q->where('nama_guru','LIKE','%'.$search.'%')->orWhere('nip',$search);
            }
        })->orderby($orderColumn,$dir);

        // $hitung = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->count();

        // $guru = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->where(function ($g) use ($search) {
        //     return $g->where('nama_guru','LIKE','%'.$search.'%');
        // })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();

        if ($start > 0) {
            $guru->skip($start);
        }
        $guru = $guru->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($guru as $g)
        {
            $item['nomor_urut'] = $i;
            $item['nip'] = $g->nip;
            $item['nama_guru'] = $g->nama_guru;
            $item['jenkel'] = $g->jenkel;
            $item['status_pegawai'] = $g->status_pegawai;
            $item['jabatan'] = match ($g->jabatan) {
                1 => 'Team IT',
                2 => 'Wali Kelas',
                3 => 'Guru BK',
                4 => 'Admin Raport',
                5 => 'Bagian Kurikulum',
                6 => 'Bagian Tata Usaha',
                7 => 'Guru Agama',
                default => 'Siswa-Siswi',
            }; 
            $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Non-Aktif';
            $item['id'] = $g->id;
            $data[] = $item;
            $i++;
        }
        // return var_dump($data);

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ],200);
    }
    
    // public function listGuru(Request $request)
    // {
    //     $columns = [
    //         0 => 'nomer_urut',
    //         1 => 'nip',
    //         2 => 'nama_guru',
    //         3 => 'jenkel',
    //         4 => 'status_pegawai',
    //         5 => 'jabatan',
    //         6 => 'is_active',
    //     ];

    //     $start = $request->start;
    //     $limit = $request->length;
    //     // $orderColumn = $columns[$request->input('order.0.column')];
    //     $orderColumn = $columns[$request->input('order.0.column')] ?? 'id';
    //     if (!isset($orderColumn)) {
    //         // Handle missing key
    //     }
    //     $dir = $request->input('order.0.dir');
    //     $search = $request->input('search')['value'];

    //     // Hitung data keseluruhan
    //     $hitung = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->count();

    //     // $guru = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->where(function ($g) use ($search) {
    //     //     return $g->where('nama_guru','LIKE','%'.$search.'%');
    //     // })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();
    //     $guru = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->where(function ($g) use ($search) {
    //         return $g->where('nama_guru','LIKE','%'.$search.'%');
    //     })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();

    //     $data = array();
    //     foreach($guru as $g)
    //     {
    //         $roles = '';
    //         if ($g->jabatan !== null) {
    //             $roles = match ($g->jabatan) {
    //                 1 => 'Team IT',
    //                 2 => 'Wali Kelas',
    //                 3 => 'Guru BK',
    //                 4 => 'Admin Raport',
    //                 5 => 'Bagian Kurikulum',
    //                 6 => 'Bagian Tata Usaha',
    //                 7 => 'Guru Agama',
    //                 default => 'Siswa-Siswi',
    //             };
    //         } else {
    //             $roles = 'Tidak Diketahui';
    //         }

    //         $stt = '';
    //         if($g->is_active == '1')
    //         {
    //             $stt = 'Aktif';
    //         } else {
    //             $stt = 'Non-Aktif';
    //         }
            
    //         $data = array();
    //         $i = 1;
    //         // $item['id'] = $g->id;
    //         $item['nomor_urut'] = $i;
    //         $item['nip'] = $g->nip;
    //         $item['nama_guru'] = $g->nama_guru;
    //         $item['jenkel'] = $g->jenkel;
    //         $item['status_pegawai'] = $g->status_pegawai;
    //         $item['jabatan'] = match ($g->jabatan) {
    //             1 => 'Team IT',
    //             2 => 'Wali Kelas',
    //             3 => 'Guru BK',
    //             4 => 'Admin Raport',
    //             5 => 'Bagian Kurikulum',
    //             6 => 'Bagian Tata Usaha',
    //             7 => 'Guru Agama',
    //             default => 'Siswa-Siswi',
    //         }; 
    //         $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Non-Aktif';
    //         $data[] = $item;
    //     }

    //     return response()->json([
    //         'draw' => $request->draw,
    //         'recordsTotal' => $hitung,
    //         'recordsFiltered' => $hitung,
    //         'data' => $data,
    //     ],200);
    // }

    public function addguru(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nip'   => 'required|string|max:255',
            'nama_guru'   => 'required|string|max:255',
            'jenkel'   => 'required|in:L,P',
            'status_pegawai'   => 'required|in:Aktif,Non-Aktif',
            'jabatan'   => 'required|string|max:255',
            'is_active'   => 'required|int',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Create User
        $user = new User();
        $user->name = $request->input('nama_guru');
        $user->email = $request->input('email');
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('jabatan');
        // $user->nip = $request->input('nip');
        $user->save();
        
        $guru = new MasterGuru();
        $guru->nip = $request->input('nip');
        $guru->nama_guru = $request->input('nama_guru');
        $guru->jenkel = $request->input('jenkel');
        $guru->status_pegawai = $request->input('status_pegawai');
        $guru->jabatan = $request->input('jabatan');
        $guru->is_active = $request->input('is_active');
        $guru->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data guru',
            'data' =>$user, 
        ],201);
    }

    // public function updateGuru(Request $request)
    // {
    //     // $search = MasterGuru::where('id',$request->id)->first();
    //     $search = $request->input('search') ? $request->input('search')['value'] : '';
    //     if(!$search)
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Data guru tidak ditemukan, pastikan id guru valid',
    //         ],400);
    //     }else{
    //         $find = User::where('id',$search->id)->first();
            
    //         if($find){
    //             $find->id = $request->id;
    //         }else{
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Data pengguna tidak ditemukan untuk ID tersebut',
    //             ], 400);
    //         }

    //         $request->nip != null ? $find->nip = $request->nip : true;
    //         $find->nama_guru = $request->nama_guru != null ? $request->nama_guru : $find->nama_guru;
    //         $find->jenkel = $request->jenkel != null ? $request->jenkel : $find->jenkel;
    //         $find->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $find->status_pegawai;
    //         $find->jabatan = $request->jabatan != null ? $request->jabatan : $find->jabatan;
    //         $find->is_active = $request->is_active != null ? $request->is_active : $find->is_active;
    //         $find->save();

    //         $search->nip = $request->nip != null ? $request->nip : $search->nip;
    //         $search->nama_guru = $request->nama_guru != null ? $request->nama_guru : $search->nama_guru;
    //         $search->jenkel = $request->jenkel != null ? $request->jenkel : $search->jenkel;
    //         $search->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $search->status_pegawai;
    //         $search->jabatan = $request->jabatan != null ? $request->jabatan : $search->jabatan;
    //         $search->is_active = $request->is_active != null ? $request->is_active : $search->is_active;
    //         $search->save();

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Berhasil meng-update data guru',
    //         ],201);
    //     }
    // }

    // public function updateGuru(Request $request,$id)
    // {
    //     $search = User::where('id',$id)->where('role_id','!=',1)->where('role_id','!=',8)->where('updated_at',null)->first();
    //     if(!$search)
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Update Gagal, Data tidak ditemukan',
    //         ],400);
            
    //     }else{
    //         $search->nip = $request->nip;
    //         $search->nama_guru = $request->nama_guru;
    //         $search->jenkel = $request->jenkel;
    //         $search->status_pegawai = $request->status_pegawai;
    //         $search->jabatan = $request->jabatan;
    //         $search->is_active = $request->is_active;

    //         $request->role_id != null ? $search->role_id = $request->role_id : true;
    //         $search->save();

    //         $search->nip = $request->nip != null ? $request->nip : $search->nip;
    //         $search->nama_guru = $request->nama_guru != null ? $request->nama_guru : $search->nama_guru;
    //         $search->jenkel = $request->jenkel != null ? $request->jenkel : $search->jenkel;
    //         $search->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $search->status_pegawai;
    //         $search->jabatan = $request->jabatan != null ? $request->jabatan : $search->jabatan;
    //         $search->is_active = $request->is_active != null ? $request->is_active : $search->is_active;
    //         $search->save();

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Berhasil mengupdate data pegawai koperasi',
    //         ],201);
    //     }

    //     if ($id === 'undefined') {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'The "id" parameter is not received correctly',
    //         ], 400);
    //     }
    // }

    // public function getGuruById(Request $request, $id)
    // {
    //     $guru = MasterGuru::find($id);
    //     return response()->json(['message' => 'Mendapatkan Data Guru', 'guru' => $guru]);
    // }
    
    public function updateGuru(Request $request, $id)
    {
        // Find the user
        $guru = MasterGuru::find($id);     
        // $user = User::find($id);

        // Check if the user exists
        if (!$guru) {
            // Return a 404 Not Found response if the user is not found
            return response()->json([
                'success' => false,
                'message' => 'Data guru tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'nip'   => 'required|string|max:255',
                'nama_guru'   => 'required|string|max:255',
                'jenkel'   => 'required|in:L,P',
                'status_pegawai'   => 'required|in:Aktif,Non-Aktif',
                'jabatan'   => 'required|string|max:255',
                'is_active'   => 'required|int',
            ]);
            $guru->nip = $request->nip;
            $guru->nama_guru = $request->nama_guru;
            $guru->jenkel = $request->jenkel;
            $guru->status_pegawai = $request->status_pegawai;
            $guru->jabatan = $request->jabatan;
            $guru->is_active = $request->is_active;
            $guru->update();

            return response()->json(['message' => 'Guru Updated Successfully', 'guru' => $guru]);
            }
    }

    // public function updateGuru(Request $request, $id)
    // {
    //     $guru = MasterGuru::find($id);
    //     $guru = MasterGuru::where('id', $id)->first();

    //     $guru->nip = $request->input('nip');
    //     $guru->nama_guru = $request->input('nama_guru');
    //     $guru->jenkel = $request->input('jenkel');
    //     $guru->status_pegawai = $request->input('status_pegawai');
    //     $guru->jabatan = $request->input('jabatan');
    //     $guru->is_active = $request->input('is_active');
       
    //     if($guru->save())
    //     {
    //         $user = User::find($id)->toArray();
    //         $user = User::where('id',$id)->first();
    //         $user->name = $request->input('nama_guru');
    //         $user->email = $request->input('email');
    //         if ($user->email == ''){
    //             return ($user);
    //         }else{
    //             $user->email_verified_at = date('Y-m-d H:i:s');
    //             $user->password = Hash::make($request->input('password'));
    //             $user->role_id = $request->input('jabatan');
    //             dd($user);
                
    //             $user->save();
    //             return response()->json(['message' => 'Guru Updated Successfully', 'guru' => $guru]);
    //         }
    //     }
    //     return response()->json(['messagae' => 'Error']);
    // }

    public function deleteGuru( $id)
    {
        //find the user
        $guru = MasterGuru::find($id);
        $user = User::find($id);
        // echo "<script>console.log('Data: " . $guru . "' );</script>";

        if(!$guru)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data master guru tidak ditemukan',
            ],400);

        }else{

            // $user = User::where('id',$guru->$id)->delete();
            // $hapus = MasterGuru::where('id',$guru->$id)->delete();
            $hapus = $guru->delete();
            $user = $user->delete();

            if($user && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data master guru',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data master guru',
                ],400);
            }
            // var_dump($cari);
        }
    }

}
