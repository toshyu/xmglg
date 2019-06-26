<?php
namespace app\admin\controller;
use app\admin\model\ProjectModel;
use think\Db;

class Project extends Base
{
	public function index()
	{	
        return $this->fetch();
    }
    public function proadd()
    {
    	return $this->fetch();
    }
}