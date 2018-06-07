<?php
header("content-type:text/html;charset=utf8");
class Mysqls{
	//定义ip地址
	public $ip;
	//用户名属性
	public $user;
	//密码属性
	public $pwd;
	//数据库属性
	public $db;
	//构造方法
	public function __construct($ip='127.0.0.1',$user='root',$pwd='root',$db='05')
	{
		$this->ip = $ip;
		$this->user = $user;
		$this->pwd = $pwd;
		$this->db = $db;
		mysql_connect($this->ip,$this->user,$this->pwd) or die('连库失败');
		mysql_select_db($this->db) or die('选库失败');
		mysql_query("set names utf8");
	}
	//添加方法
	public function add($sql)
	{
        return mysql_query($sql);
	}
	//查询方法（多条）
	public function select_all($sql)
	{
        $res = mysql_query($sql);
        $data = array();
        while($arr = mysql_fetch_assoc($res))
        {
        	$data[] = $arr;
        }
        return $data;

	}
	//删除方法
	public function delete($sql)
	{
       return mysql_query($sql);
	}

	//查询方法（单条）
	public function select_one($sql)
	{
        $res = mysql_query($sql);
        return mysql_fetch_assoc($res);

	}
	//修改方法
	public function update($sql)
	{
        return mysql_query($sql);
	}
}