<?php

namespace App\Admin\Controllers;

use App\baner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BanerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'baner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new baner());

        $grid->column('id', __('Id'));
        $grid->column('baner', __('Baner'));
        $grid->column('event', __('Event'));
        $grid->column('active', __('Active'));

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
        $show = new Show(baner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('baner', __('Baner'));
        $show->field('event', __('Event'));
        $show->field('active', __('Active'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new baner());

        $form->textarea('baner', __('Baner'));
        $form->textarea('event', __('Event'));
        $form->textarea('active', __('Active'));

        return $form;
    }
}
