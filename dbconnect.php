<?php 
//データベースに接続
	//このファイルをrootディレクトリの下に置くって書いてあるけどやり方がわからない
	$db = mysqli_connect('localhost','root','mysql','seed_sns') or die(mysqli_connect_error());
	 mysqli_set_charset($db, 'utf8');

	// mysqli_connect('DBのホスト名','DBのユーザー名','DBのパスワード','DB名')

	//＊or die()という書き方について
	// or の左側に記述してあるコードがfalseを返すとき、右側の処理を実行する
	// die()が実行されると()内のデータを出力する
	// mysql_connect_error()関数は、DBとの接続時に出たエラーを取得する関数

	//＊PDOとmysqli関数群の違い
	// PDOはどのDBの種類が何であれ等しく実行できる命令文
	// mysqli関数群はDBの種類がMySQLの場合に限り実行できる命令文

 ?>