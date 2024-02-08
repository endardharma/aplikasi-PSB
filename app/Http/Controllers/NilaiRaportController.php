<?php

namespace App\Http\Controllers;

use App\Exports\NilaiRaportExport;
use App\Imports\NilaiRaportImport;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\MasterGuru;
use App\Models\NilaiRaport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class NilaiRaportController extends Controller
{
    public function index()
    {
        return view('admin.nilairaport.index');
        $raport = NilaiRaport::all();
        return view('nilairaport.index', compact('raport'));
    }

    public function listRaport(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'png_pai',
            4 => 'png_ppkn',
            5 => 'png_bind',
            6 => 'png_mtk_umum',
            7 => 'png_sjr_indo',
            8 => 'png_bing',
            9 => 'png_senbud',
            10 => 'png_penjaskes',
            11 => 'png_pkwu',
            12 => 'png_bhs_daerah',
            13 => 'png_mtk_peminatan',
            14 => 'png_fisika',
            15 => 'png_kimia',
            16 => 'png_biologi',
            17 => 'png_fiqih',
            18 => 'png_bhs_arab',
            19 => 'png_conversation',
            20 => 'png_ekonomi',
            21 => 'ktr_pai',
            22 => 'ktr_ppkn',
            23 => 'ktr_bind',
            24 => 'ktr_mtk_umum',
            25 => 'ktr_sjr_indo',
            26 => 'ktr_bing',
            27 => 'ktr_senbud',
            28 => 'ktr_penjaskes',
            29 => 'ktr_pkwu',
            30 => 'ktr_bhs_daerah',
            31 => 'ktr_mtk_peminatan',
            32 => 'ktr_fisika',
            33 => 'ktr_kimia',
            34 => 'ktr_biologi',
            35 => 'ktr_fiqih',
            36 => 'ktr_bhs_arab',
            37 => 'ktr_conversation',
            38 => 'ktr_ekonomi',
            39 => 'nilai_pengetahuan',
            40 => 'nilai_keterampilan',
            41 => 'nilai_raport',
            42 => 'semester', 
            43 => 'tahun_ajar', 
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if(!in_array($orderColumn, $columns))
        {
            $orderColumn = 'id';
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
        $hitung = NilaiRaport::count();

        $raport = NilaiRaport::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('png_pai', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $raport->skip($start);
        }
        $raport = $raport->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($raport as $m)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $m->nis;
            $item['kelas_id'] = $m->kelas_id;
            $item['png_pai'] = $m->png_pai;
            $item['png_ppkn'] = $m->png_ppkn;
            $item['png_bind'] = $m->png_bind;
            $item['png_mtk_umum'] = $m->png_mtk_umum;
            $item['png_sjr_indo'] = $m->png_sjr_indo;
            $item['png_bing'] = $m->png_bing;
            $item['png_senbud'] = $m->png_senbud;
            $item['png_penjaskes'] = $m->png_penjaskes;
            $item['png_pkwu'] = $m->png_pkwu;
            $item['png_bhs_daerah'] = $m->png_bhs_daerah;
            $item['png_mtk_peminatan'] = $m->png_mtk_peminatan;
            $item['png_fisika'] = $m->png_fisika;
            $item['png_kimia'] = $m->png_kimia;
            $item['png_biologi'] = $m->png_biologi;
            $item['png_fiqih'] = $m->png_fiqih;
            $item['png_bhs_arab'] = $m->png_bhs_arab;
            $item['png_conversation'] = $m->png_conversation;
            $item['png_ekonomi'] = $m->png_ekonomi;
            $item['ktr_pai'] = $m->ktr_pai;
            $item['ktr_ppkn'] = $m->ktr_ppkn;
            $item['ktr_bind'] = $m->ktr_bind;
            $item['ktr_mtk_umum'] = $m->ktr_mtk_umum;
            $item['ktr_sjr_indo'] = $m->ktr_sjr_indo;
            $item['ktr_bing'] = $m->ktr_bing;
            $item['ktr_senbud'] = $m->ktr_senbud;
            $item['ktr_penjaskes'] = $m->ktr_penjaskes;
            $item['ktr_pkwu'] = $m->ktr_pkwu;
            $item['ktr_bhs_daerah'] = $m->ktr_bhs_daerah;
            $item['ktr_mtk_peminatan'] = $m->ktr_mtk_peminatan;
            $item['ktr_fisika'] = $m->ktr_fisika;
            $item['ktr_kimia'] = $m->ktr_kimia;
            $item['ktr_biologi'] = $m->ktr_biologi;
            $item['ktr_fiqih'] = $m->ktr_fiqih;
            $item['ktr_bhs_arab'] = $m->ktr_bhs_arab;
            $item['ktr_conversation'] = $m->ktr_conversation;
            $item['ktr_ekonomi'] = $m->ktr_ekonomi;
            $item['nilai_pengetahuan'] = $m->nilai_pengetahuan;
            $item['nilai_keterampilan'] = $m->nilai_keterampilan;
            $item['nilai_raport'] = $m->nilai_raport;
            $item['semester'] = $m->semester;
            $item['tahun_ajar'] = $m->tahun_ajar;
            
            $item['id'] = $m->id;
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

    public function deleteSiswa ($id)
    {
        $raport = NilaiRaport::find($id);
        $raport->delete();
        return response()->json([
            'message' => 'Nilai Raport deleted successfully'
        ]);
    }

    public function exportNilaiRaport()
    {
        return Excel::download(new NilaiRaportExport, 'DataNilaiRaport.xlsx');
    }

    public function importNilaiRaport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataNilaiRaport', $namaFile);
        
        Excel::import(new NilaiRaportImport , public_path('/DataNilaiRaport/'.$namaFile));

        return \redirect()->back();
    }
}
