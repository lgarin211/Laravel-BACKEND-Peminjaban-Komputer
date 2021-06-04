<?php

namespace App\Http\Controllers;

use App\PcHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Object_;

class LoginSiswa extends Controller
{
    public function Cliend()
    {

        if (!empty($_POST)) {
            dd($_POST);
            $cas = new PcHistory;
            $cas->Siswa  = $_POST['nama'];
            $cas->Absen  = $_POST['no_Absen'];
            $cas->Kelas  = $_POST['kelas'];
            $cas->PC  = $_POST['nomor_Komputer'];
            $cas->Alasan  = $_POST['Keterangan'];
            $cas->save($_POST);
            Session::put('Active', $_POST['nama'] . ' dari kelas ' . $_POST['kelas']);
        }
        if (!empty(Session::get('Active'))) {
            return \view('respon');
        } else {
            if (!empty($_GET['ap'])) {
                return \view('page_reg2');
            } else {
                return \view('page_reg');
            }
        }
    }

    public function CasaveJ(Request $request)
    {
        if (!empty($_GET['api'])) {
            date_default_timezone_set('Asia/Jakarta');
            $cas = ([
                'Siswa' => $_GET['Siswa'],
                'Absen' => $_GET['Absen'],
                'Kelas' => $_GET['Kelas'],
                'PC' => $_GET['PC'],
                'Alasan' => $_GET['Alasan'],
                'created_at'=>date('Y-m-d  H:i:s'),
                'updated_at'=>date('Y-m-d  H:i:s'),
            ]);
            DB::table('pc_histories')->insert($cas);
            Session::put('Active', $request->Siswa . ' dari kelas ' . $request->Siswa);
            $pasman = [
                "active" => true,
                "case" => Session::get('Active')
            ];
            dd($pasman);
            // $mask = json_decode($pasman);
            // echo $pasman;
            // return null;
        }
    }
    public function Casave(Request $request)
    {
        if (!empty($_POST)) {

            $cas = new PcHistory;
            $cas->nama = $_POST['nama'];
            $cas->no_Absen = $_POST['no_Absen'];
            $cas->kelas = $_POST['kelas'];
            $cas->nomor_Komputer = $_POST['nomor_Komputer'];
            $cas->Keterangan = $_POST['Keterangan'];
            $cas->save($_POST);
            Session::put('Active', $_POST['nama'] . ' dari kelas ' . $_POST['kelas']);
        }
    }
}
