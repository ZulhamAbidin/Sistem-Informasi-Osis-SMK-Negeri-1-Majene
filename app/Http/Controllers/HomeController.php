<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use DB;


class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     *
     * @return \Illuminate\View\View
     */
    public function index()

    {
            // $images = Image::orderBy('created_at', 'desc')->get();

            /* 1 */    $Ketua = DB::table('Images')
                            ->where('jabatan', 'Ketua')
                            ->get();

            /* 2 */   $WakilKetuaI = DB::table('Images')
                            ->where('jabatan', 'Wakil Ketua I')
                            ->get();

            /* 3 */  $WakilKetuaII = DB::table('Images')
                            ->where('jabatan', 'Wakil Ketua II')
                            ->get();

            /* 4 */ $Sekretaris = DB::table('Images')
                            ->where('jabatan', 'Sekretaris')
                            ->get();

            /* 5 */ $WakilSekretaris = DB::table('Images')
                            ->where('jabatan', 'Wakil Sekretaris')
                            ->get();

                /* 16 */ $Bendahara = DB::table('Images')
                            ->where('jabatan', 'Bendahara')
                            ->get();

            /* 6 */ $SeksiBidangKeimanan = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Keimanan Dan Ketaqwaan Terhadap Tuhan YME')
                            ->get();

            /* 7 */ $SeksiBidangBudi = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Budi Pekerti Luhur dan Akhlak Mulia')
                            ->get();

            /* 8 */ $SeksiBidangKepribadian = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Kepribadian Unggul, Wawasan Kebangasaan dan Bela Negara')
                            ->get();

            /* 9 */ $SeksiBidangDemokrasi = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Demokrasi, HAM Pendidikan Politik, Lingkungan Hidup, Kepekaan dan Toleransi Sosial')
                            ->get();

            /* 10 */ $SeksiBidangPrestasi = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Prestasi Seni, dan Olahraga Sesuai Bakat dan Minat')
                            ->get();

            /* 11 */ $SeksiBidangKreatifitas = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Kreatifitas, Keterampilan dan Kewiraswastaan')
                            ->get();

            /* 12 */ $SeksiBidangKualitas = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Kualitas Jasmani Kesehatan dan gizi')
                            ->get();

            /* 13 */ $SeksiBidangSastra = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Saastra Dan Budaya')
                            ->get();

            /* 14 */ $SeksiBidangTeknologi = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Teknologi Informasi dan Komunikasi')
                            ->get();

            /* 15 */ $SeksiBidangKomunikasi = DB::table('Images')
                            ->where('jabatan', 'Seksi Bidang Komunikasi dalam Bahasa Inggris')
                            ->get();

                return view('welcome', compact('Ketua', 'WakilKetuaI', 'WakilKetuaII', 'Sekretaris', 'WakilSekretaris', 'Bendahara', 'SeksiBidangKeimanan', 'SeksiBidangBudi',
                                                'SeksiBidangKepribadian', 'SeksiBidangDemokrasi', 'SeksiBidangPrestasi', 'SeksiBidangKreatifitas', 'SeksiBidangKualitas',
                                                'SeksiBidangSastra', 'SeksiBidangTeknologi', 'SeksiBidangKomunikasi'));
    }
}
