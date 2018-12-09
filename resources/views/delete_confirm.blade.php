<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>削除確認画面</h1>
<form action="../login/index" method="post">
{{ csrf_field() }}
<input class="btn btn-lg btn btn-primary" type="submit" value="ログアウト">
</form>
<?php
    echo 'id=  ';echo $_POST['id'] ."<br>";
    echo '名前=  ';echo $_POST['name'] ."<br>";
    echo 'フリガナ=  ';echo $_POST['kana'] ."<br>";
    // echo $_POST['id'] ."<br>";echo 'id' ."<br>";
    // echo $_POST['name'] ."<br>";echo 'id' ."<br>";
    // echo $_POST['kana'] ."<br>";echo 'id' ."<br>";
?>

        <form action="../delete_complete/index" method="post">
        {{ csrf_field() }}
        <input class="btn btn-lg btn btn-primary" type="submit" value="削除しますか？">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="kana" value="<?=$_POST['kana']?>">
        </form>

        <form method="post" action="../list/index">
        {{ csrf_field() }}
        <input class="btn btn-lg btn btn-primary" type="submit" value="戻る">
        </form>
</body>
</html>