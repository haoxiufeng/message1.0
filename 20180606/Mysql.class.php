<?php 
	
	class Mysql{

		public $conn; //代表的是数据库连接的资源
		function __construct(){
		header('content-type:text/html;charset=utf-8');
			$this->conn = mysql_connect('127.0.0.1','root','root') or die('连接失败');
			mysql_select_db("05") or die('选库失败');
			mysql_query('set names utf8');
		}


		//查询方法
		function select($sql){
			$res = mysql_query($sql);
			$data = array();
			while($row = mysql_fetch_assoc($res)){
				$data[] = $row;
			}
			return $data;
		}

		//修改方法
		function update($sql){
			mysql_query($sql);
			return mysql_affected_rows($this->conn); 
		}

		//添加方法
		function add($sql){
			mysql_query($sql);
			return mysql_insert_id($this->conn); 
		}
	}

 ?>