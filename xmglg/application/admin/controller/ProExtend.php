<?php 
namespace app\admin\controller;

use think\Db;

class ProExtend extends Base 
{
	public function index()
	{
		return $this->fetch();
	}
}