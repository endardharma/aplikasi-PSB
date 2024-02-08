<?php

namespace App\Http\Controllers;

use App\Exports\NilaiSemuaKriteriaEport;
use App\Imports\NilaiSemuaKriteriaImport;
use App\Models\MasterSiswa;
use App\Models\NilaiRaport;
use App\Models\NilaiSemuaKriteria;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NilaiSemuaKriteriaController extends Controller
{
    public function index()
    {
        $mastersiswa = MasterSiswa::all();
        $nilairaport = NilaiRaport::all();
        $nilaisemuakriteria = NilaiSemuaKriteria::with('MasterSiswa', 'NilaiRaport')->paginate(2);

        // dd($nilairaport)->toArray();
        return view('admin.nilaisemuakriteria.index', compact('mastersiswa', 'nilairaport'));
    }

    public function listNilaiSemuaKriteria(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'nik',
            3 => 'nilairaport_id',
            4 => 'nilaiketidakhadiran_id',
            5 => 'nilaisikap_id',
            6 => 'nilaiprestasi_id',
            7 => 'nilaiketerlambatan_id',
            8 => 'nilaihafalan_id',
            9 => 'semester',
            10 => 'tahun_ajar',
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
        $hitung = NilaiSemuaKriteria::count();

        $nilaisemuakriteria = NilaiSemuaKriteria::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('nilairaport_id', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $nilaisemuakriteria->skip($start);
        }
        $nilaisemuakriteria = $nilaisemuakriteria->take($limit)->get();
        
        $data = array();
        $i = 1;
        // foreach($nilaisemuakriteria as $s)
        // {
        //     $item['nomor_urut'] = $i;
        //     $item['nis'] = $s->nis;
        //     $item['nilairaport_id'] = $s->nilairaport_id;
        //     $item['nilaiketidakhadiran_id'] = $s->nilaiketidakhadiran_id;
        //     $item['nilaisikap_id'] = $s->nilaisikap_id;
        //     $item['nilaiprestasi_id'] = $s->nilaiprestasi_id;
        //     $item['nilaiketerlambatan_id'] = $s->nilaiketerlambatan_id;
        //     $item['nilaihafalan_id'] = $s->nilaihafalan_id;
        //     $item['semester'] = $s->semester;
        //     $item['tahun_ajar'] = $s->tahun_ajar;

        //     $item['id'] = $s->id;
        //     $data[] = $item;
        //     $i++;
        // }

        $mastersiswa = MasterSiswa::all();
        foreach ($mastersiswa as $siswa)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $siswa->nis;
            $item['nilairaport_id'] = $siswa->nilairaport_id;
            $item['nilaiketidakhadiran_id'] = $siswa->nilaiketidakhadiran_id;
            $item['nilaisikap_id'] = $siswa->nilaisikap_id;
            $item['nilaiprestasi_id'] = $siswa->nilaiprestasi_id;
            $item['nilaiketerlambatan_id'] = $siswa->nilaiketerlambatan_id;
            $item['nilaihafalan_id'] = $siswa->nilaihafalan_id;
            $item['semester'] = $siswa->semester;
            $item['tahun_ajar'] = $siswa->tahun_ajar;
            $data[] = $item;
            $i++;
        }

        // $nilairaport_id = NilaiRaport::all();
        // foreach ($nilairaport_id as $raport)
        // {
        //     $item['nomor_urut'] = $i;
        //     $item['nilai_raport'] = $raport->nilai_raport;
        //     $data[] = $item;
        //     $i++;
        // }


        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data
        ],200);
    }

    public function exportNilaiSemuaKriteria()
    {
        return Excel::download(new NilaiSemuaKriteriaEport, 'DataNilaiSemuaKriteria.xlsx');
    }

    public function importNilaiSemuaKriteria(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataNilaiSemuaKriteria', $namaFile);

        Excel::import(new NilaiSemuaKriteriaImport , public_path('/DataNilaiSemuaKriteria/'.$namaFile));
        return \redirect()->back();
    }
    
}
