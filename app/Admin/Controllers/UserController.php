<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', 'ID')->sortable();

        $grid->column('school_card', '身份证明')->image();
        $grid->column('name', '用户名');

        $grid->column('status','用户状态')->using([
            0 => '待审核',
            1 => '审核通过',
            2 => '',
            99 => '已封禁',
        ])->label([
            0 => 'default',
            1 => 'success',
            2 => 'info',
            99 => 'warning',
        ]);

        $grid->column('created_at', __('注册时间'));
        $grid->column('updated_at', __('修改时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);
        $form->tools(function (Form\Tools $tools) {
            // 去掉`列表`按钮
            $tools->disableList();
            // 去掉`删除`按钮
            $tools->disableDelete();
            // 去掉`查看`按钮
            $tools->disableView();
        });

        $form->text('name', __('用户名'))->required();
        $form->cropper('school_card', __('身份证明'))->move('admin_uploads/article');
        $form->radio('status', '用户状态')->options(['0'=>'待审核', '1'=>'审核通过', '99'=>'封禁'])->default('0');

        return $form;
    }
}
