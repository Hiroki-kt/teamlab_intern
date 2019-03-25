<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHPのサンプル</title>
</head>
<body>
	<?php 
		/*
		$date = date("Y/m/d H:i:s");
		print($date);
		$a = 5;
		if($a == 3){
			print("$a is 3");
		}else{
			print("$a is not 3");
		}
		for($i = 0; $i < 10; $i++){
			print("$i");
		}

		// 引数の文字列を二回表示する関数
		function double_print($text){
			print($text . $text);
		}

		double_print("a");
		double_print("bc");

		//"one","two","three"を要素とする配列を作成
		$a1 = array("one", "two", "three");

		// 配列$a1の末尾に"four"という要素を追加
		$a1[] = "four";
		// 配列$a1の0番目の要素を変更
		$a1[0] = "one?";

		print_r($a1);

		//$hash["one"]が”いち”, $hash["two"]が”に”,$hash["three"]が"さん"となる連想配列を作成
		$hash = array("one" => "いち", "two" => "に", "three" => "さん");
		$hash["four"] = "し";
		print_r($hash);

		foreach ($hash as $key => $value) {
			print("$key is $value");
		}
				if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/', 'q-6.83p', $m)){
			print("match:$m[0] ");
			if($m[1] == "-")
				print("minus! ");
			if(isset($m[2]))
				print("decimal!");
		}else{
			print("not match");
		}
		*/

		//commentがPOSTされているなら
		if(isset($_POST["comment"]) && isset($_POST["comment"]) && isset($_POST["comment"])){
			//エスケープしてから表示
			$comment = htmlspecialchars($_POST["comment"]);
			$name = htmlspecialchars($_POST["name"]);
			$mail = htmlspecialchars($_POST["mail"]);
			print("${name}さん「 ${comment} 」について後日${mail}あてに返信いたします。");
		}else{
	?>
		<p>質問フォーム</p>
		<form method="POST" action="index.php">
			名前：<input name="name" />
			件名：<input name="comment" />
			メールアドレス：<input name="mail" />
			<input type="submit" value="送信" />
			<input type="reset" name="クリア" />
		</form>
	<?php
		}
	?>

</body>
</html>

