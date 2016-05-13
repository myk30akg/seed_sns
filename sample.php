<?php 
	require('dbconnect.php');

	//①sql文を作成
	$sql = 'SELECT * FROM members'; //メンバーデータ全件取得

	//②sql文を実行 (queryは処理を実行するという意味)
	$members = mysqli_query($db, $sql) or die(mysqli_error($db)); //SELECT文の場合は取得したデータを変数で受け取る(SELECT文のときのみ実行可能) 

	//実行直後のデータはobject型という型になっていて、そのまま扱うことはできない(phpの場合)
	var_dump($members);
	//新しい書き方で何が入っているかわからない場合はとりあえずvar_dump()かechoで画面上に出力するべし

	//③データを処理・表示
	//$member = mysqli_fetch_assoc($members);
		//member = array('id'=>'1', 'nick_name'=>'hogehoge', 'email'=>'hoge@gmail.com'・・・・・・・・)
	//var_dump($member);

	//プログラミングの重要概念
	//変数・配列・型・条件分岐文・繰り返構文
	while($member = mysqli_fetch_assoc($members)){
		//var_dump($member);
		echo 'ユーザー名 : '. $member['nick_name'] . ' - ID : ' . $member['email'];
		echo '<br>';
	//while文はfalseで処理が終了する
	}
 ?>		