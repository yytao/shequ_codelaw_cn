<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户发帖';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', 'ID')->sortable();

        $grid->column('user.name', '发帖用户');
        $grid->column('category.category_name', '发帖分类');

        $grid->column('', '发布内容')->modal('发布内容', function ($model) {

            return new Table([], ['' => $model->content]);
        });

        $grid->column('status','帖子状态')->using([
            0 => '待审核',
            1 => '审核通过',
            2 => '',
            99 => '已拒绝',
        ])->label([
            0 => 'default',
            1 => 'success',
            2 => 'info',
            99 => 'warning',
        ]);

        $grid->column('created_at', __('发布时间'));
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
        $show = new Show(Article::findOrFail($id));

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
        $form = new Form(new Article);
        $form->tools(function (Form\Tools $tools) {
            // 去掉`列表`按钮
            $tools->disableList();
            // 去掉`删除`按钮
            $tools->disableDelete();
            // 去掉`查看`按钮
            $tools->disableView();
        });


        $form->display('category.category_name', __('分类'));
        $form->display('content', __('发布内容'));

        $form->radio('status', '帖子状态')->options(['0'=>'待审核', '1'=>'审核通过', '99'=>'封禁'])->default('0');

        return $form;
    }
}
