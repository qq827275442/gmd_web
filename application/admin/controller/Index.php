<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
	//登陆页面
	public function index()
	{
		return $this->fetch('login');
	}
	//展示后台首页模板文件
	public function first()
	{
		return $this->fetch('index');
	}
	//展示网站设置
	public function web()
	{
		return $this->fetch('info');
	}
	//展示修改密码
	public function pass()
	{
		return $this->fetch('pass');
	}
	//轮播图
	public function adv()
	{
		return $this->fetch('adv');
	}
	//留言管理
	public function book()
	{
		return $this->fetch('book');
	}
	//栏目管理
	public function column()
	{
		return $this->fetch('column');
	}
}