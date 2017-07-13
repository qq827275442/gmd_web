<?php
namespace app\admin\controller;
use think\Controller;
class Content extends Controller
{
	//内容页
	public function article()
	{
		return $this->fetch('list');
	}
	//添加内容
	public function addContent()
	{
		return $this->fetch('add');
	}
	//分类管理
	public function cate()
	{
		return $this->fetch('cate');
	}
}