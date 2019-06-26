<?php
namespace app\admin\controller;


class ProTask extends Base
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