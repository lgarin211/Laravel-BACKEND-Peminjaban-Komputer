<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\PcHistory;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

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
                    $column->append($this->Log_PC());
                });
            });
    }

    public function Log_PC()
    {
        return view('data_penggunaan_pc');
    }
}
