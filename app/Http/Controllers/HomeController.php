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


        $ketua = DB::table('Images')
                    ->where('jabatan', 'ketua umum')
                    ->get();

        $wakil = DB::table('Images')
                    ->where('jabatan', 'wakil ketua')
                    ->get();

        $sekretaris = DB::table('Images')
                    ->where('jabatan', 'sekretaris')
                    ->get();

        $bendahara = DB::table('Images')
                    ->where('jabatan', 'bendahara')
                    ->get();

        return view('welcome', compact('ketua', 'wakil', 'sekretaris', 'bendahara'));
    }
}
