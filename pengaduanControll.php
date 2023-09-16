<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;


class pengaduanControll extends Controller
{
    function index(){

        $judul = "Selamat datang";

        return view('home', ['TextJudul' => $judul]);
    }

    function pengaduan(){ 
        
        $data = "Data Laporan";
        $pengaduan = DB::table('pengaduan')->get();
        
        return view('pengaduan', ['TextIsi' => $data, 'pengaduan' => $pengaduan]);
    }

    function tampil_isi(){ 
        
        $isi = "Silahkan Isi Laporan anda";
        
        return view('isi-pengaduan', ['isi' => $isi]);
    }

    function proses_tambah_pengaduan(Request $request){
        //validasi
        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);


         // $isi_pengaduan = $_POST['isi_laporan'];
         $isi_pengaduan = $request->isi_laporan;

         DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '07',
            'isi_laporan' => $isi_pengaduan,
            'foto' => '',
            'status' => '0'
         ]);
         return redirect('/pengaduan');
    }

    function masyarakat()
    {

        $dataM = "Data pelapor";
        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat', ['TextIsi' => $dataM, 'masyarakat' => $masyarakat]);
    }

    function tampil_isiM()
    {

        $isiM = "Silahkan Daftar";

        return view('isi-masyarakat', ['isiM' => $isiM]);
    }

    function proses_tambah_masyarakat(Request $request)
    {

        //validasi
        $request->validate([
            'isi_daftar' => 'required|min:2'
        ]);


        // $isi_masyarakat = $_POST['isi_laporan'];
        $isi_masyarakat = $request->isi_daftar;
        $isi_username = $request->isi_user;
        $isi_password = $request->isi_pass;
        $isi_telp = $request->isi_no;

        DB::table('masyarakat')->insert([
            'nik' => '08',
            'nama' => $isi_masyarakat,
            'username' => $isi_username,
            'password' => $isi_password,
            'telp' => $isi_telp,
        ]);
        return redirect('/masyarakat');
    }

}

// function pengaduan(){
//     return view('pengaduan');
// }
