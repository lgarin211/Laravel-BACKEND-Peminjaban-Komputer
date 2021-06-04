<?php

namespace App\Admin\Controllers;

use App\PcHistory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PcController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PcHistory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PcHistory());

        $grid->column('Siswa', __('Nama Siswa'));
        $grid->column('Kelas', __('Kelas'));
        $grid->column('Absen', __('Nomor Absen'));
        $grid->column('Alasan', __('Alasan'));
        $grid->column('PC', __('Nomot Komputer'));
        $grid->column('created_at', __('Mulai Pada'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(PcHistory::findOrFail($id));

        $show->column('Siswa', __('Nama Siswa'));
        $show->column('Kelas', __('Kelas'));
        $show->column('Absen', __('Nomor Absen'));
        $show->column('Alasan', __('Alasan'));
        $show->column('PC', __('Nomot Komputer'));
        $show->column('created_at', __('Mulai Pada'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PcHistory());
        $form->text('Siswa', __('Nama Siswa'));
        $form->text('Kelas', __('Kelas'));
        $form->text('Absen', __('Nomor Absen'));
        $form->textarea('Alasan', __('Alasan'));
        $form->text('PC', __('Nomot Komputer'));
        $form->text('created_at', __('Mulai Pada'));

        return $form;
    }
}
