<?php

namespace App\Http\Controllers;

use App\PcHistory;
use Encore\Admin\Middleware\Session;
use Illuminate\Http\Request;

class Loginuser extends Controller
{
    public function Log_PC()
    {
        date_default_timezone_set('Asia/Jakarta');
        $oubg = date("Y-m-d");
        $pengunaan = PcHistory::orderByDesc('created_at')->get();
        $thisday = PcHistory::where('created_at', 'like', $oubg . '%')->orderByDesc('created_at')->get();
        $data = array(
            'log' => $pengunaan,
            'thisday' => $thisday
        );
        // \dd($data);
        return view('data_penggunaan_pc_ajax', compact('data'));
    }
}
