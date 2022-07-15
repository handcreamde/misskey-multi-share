<title>Misskey Multi Share</title>
<p>あなたのインスタンスのアドレスを入力してください。<br>(例: misskey.io):</p>
<form action="redirect.php" method="post">
<input type="hidden" name="text" value="<?php echo $_GET['text']; ?>">
<textarea name="address" cols="40" rows="1"></textarea>
<p><input type="submit" name="send" value="共有"></p>
</form>