<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table("tbl_nilai")
            ->select("data_siswa.nama_siswa","setup_pelajaran.nama_pelajaran", "data_guru.nama_guru","setup_kelas.nama_kelas","tbl_nilai.nilai")
            ->join("data_siswa", "data_siswa.id_siswa", "tbl_nilai.id_siswa")
            ->join("data_guru", "data_guru.id_guru", "tbl_nilai.id_guru")
            ->join("setup_pelajaran", "setup_pelajaran.id_pelajaran", "tbl_nilai.id_pelajaran")
            ->join("setup_kelas", "setup_kelas.id_kelas", "tbl_nilai.id_kelas");
        if ($request->has("search")){
            $query->where("setup_kelas.nama_kelas", "LIKE", "%$request->search%")
            ->orWhere("setup_pelajaran.nama_pelajaran", "LIKE", "%$request->search%")
            ->orWhere("data_guru.nama_guru", "LIKE", "%$request->search%")
            ->orWhere("data_siswa.nama_siswa", "LIKE", "%$request->search%");
        }

        $select_join = $query->get();

        return view("home-0331", compact('select_join'));
    }
}