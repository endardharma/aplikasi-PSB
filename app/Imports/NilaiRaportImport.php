<?php

namespace App\Imports;

use App\Models\NilaiRaport;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiRaportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row)->toArray;

        return new NilaiRaport([
            'nis' => $row[1],
            'kelas_id' => $row[2],
            'png_pai' => $row[3],
            'png_ppkn' => $row[4],
            'png_bind' => $row[5],
            'png_mtk_umum' => $row[6],
            'png_sjr_indo' => $row[7],
            'png_bing' => $row[8],
            'png_senbud' => $row[9],
            'png_penjaskes' => $row[10],
            'png_pkwu' => $row[11],
            'png_bhs_daerah' => $row[12],
            'png_mtk_peminatan' => $row[13],
            'png_fisika' => $row[14],
            'png_kimia' => $row[15],
            'png_biologi' => $row[16],
            'png_fiqih' => $row[17],
            'png_bhs_arab' => $row[18],
            'png_conversation' => $row[19],
            'png_ekonomi' => $row[20],
            'ktr_pai' => $row[21],
            'ktr_ppkn' => $row[22],
            'ktr_bind' => $row[23],
            'ktr_mtk_umum' => $row[24],
            'ktr_sjr_indo' => $row[25],
            'ktr_bing' => $row[26],
            'ktr_senbud' => $row[27],
            'ktr_penjaskes' => $row[28],
            'ktr_pkwu' => $row[29],
            'ktr_bhs_daerah' => $row[30],
            'ktr_mtk_peminatan' => $row[31],
            'ktr_fisika' => $row[32],
            'ktr_kimia' => $row[33],
            'ktr_biologi' => $row[34],
            'ktr_fiqih' => $row[35],
            'ktr_bhs_arab' => $row[36],
            'ktr_conversation' => $row[37],
            'ktr_ekonomi' => $row[38],
            'nilai_pengetahuan' => $row[39],
            'nilai_keterampilan' => $row[40],
            'nilai_raport' => $row[41],
            'semester' => $row[42],
            'tahun_ajar' => $row[43],
        ]);


    }
}
