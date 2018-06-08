<?php
//header("content-type:text/html;charset=utf8");
////连库、选库、设置字符集
//mysql_connect("127.0.0.1","root","root");
//mysql_select_db("05");
$db = new PDO('mysql:host=localhost;dbname=05','root','root');
//mysql_query('set names utf8');
//写查询的sql语句
$sql = "select * from message inner join login on login.name = message.name";
//var_dump($sql);exit;
//调用查询方法
$res = $db->query($sql)->fetchAll();
foreach($res as $key => $val){
	$data[$key]['text']=$res[$key]['text'];
	$data[$key]['time']=$res[$key]['time'];
	$data[$key]['name']=$res[$key]['name'];
}
?>
<center>
	<table border="1" style="text-align: center;">
		<tr align="center">
			<td>留言</td>
			<td>时间</td>
			<td>留言人</td>
		</tr>
		<?php foreach($data as $val){?>
		<tr>
			<td><?php echo $val['text']?></td>
			<td><?php echo date("Y-m-d H:i:s",$val['time'])?></td>
			<td><?php echo $val['name']?></td>
		</tr>
		<?php }?>
	</table>
</center>