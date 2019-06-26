<?php 
namespace app\admin\Model;

use think\Model;
use think\Db;

class ProjectModel extends Model
{
	protected $connection='db_config_cards';

	public function getList()
    {
        return $this->field();
      } 
    
}