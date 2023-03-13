<?php
	// セッションをチェック
	session_start();
	if ($_SESSION['authenticated']) {
		echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";

		// セッションが有効期限切れになったかどうかをチェック
		if (time() > $_SESSION['expire_time']) {
			// セッションを終了して、login.htmlにリダイレクト
			session_unset();
			session_destroy();
			header('Location: login.html');
			exit();
		}
	} else {
		// セッションが開始されていない場合、login.htmlにリダイレクト
		header('Location: login.html');
		exit();
	}
	?>

    