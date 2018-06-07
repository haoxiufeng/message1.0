<?php
//header("content-type:text/html;charset=utf8");
////连库、选库、设置字符集
//mysql_connect("127.0.0.1","root","root");
//mysql_select_db("05");
//mysql_query('set names utf8');
include_once "Mysqls.class.php";
$db = new Mysqls;
$name = isset($_POST['name'])?$_POST['name']:"";
$pwd = isset($_POST['pwd'])?$_POST['pwd']:"";
$sql = "select * from login where name='$name'";
//var_dump($sql);exit;
$res = $db->add($sql);
//var_dump($res);exit;
if($res){
	setcookie('name',$name);
	echo "<script>alert('登录成功');location.href='message.html';</script>";
}else{
	echo "<script>alert('登录失败');location.href='login.html';</script>";
}
?>