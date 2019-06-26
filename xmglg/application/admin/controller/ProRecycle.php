<?php
namespace app\admin\controller;

use think\Db;

class ProRecycle extends Base
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