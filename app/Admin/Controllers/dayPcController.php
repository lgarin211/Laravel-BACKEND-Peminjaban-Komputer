<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\PcHistory;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Support\Facades\DB;
Use Encore\Admin\Admin;
class dayPcController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            // ->row(Dashboard::title())
            ->row(function (Row $row)
            {
                $row->column(12, function (Column $column) {
                    $column->append($this->Log_PC('data_penggunaan_pc'));
                });
            });
    }

    public function Log_PC($pill='index')
    {
        return view($pill);
    }

    public function addBaner(Content $content)
    {
        if (!empty($_POST)) {
            date_default_timezone_set('Asia/Jakarta');
            unset($_POST["_token"]);
            $cas = ([
                'baner' => $_POST['baner'],
                'event' => "nullkan",//$_POST['absen'],
                'active' => "yes",
            ]);
            DB::table('baners')->insert($cas);
        }
    
        Admin::js('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        Admin::js('http://suga.id/vendor/laravel-filemanager/js/stand-alone-button.js');
        Admin::script('$("#lfm").filemanager("image");');

          return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(function (Row $row)
            {
                $row->column(12, function (Column $column) {
                    $column->append($this->Log_PC('Baner'));
                });
            });
    }
}
