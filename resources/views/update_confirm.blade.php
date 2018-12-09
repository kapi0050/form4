<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>更新確認画面</h1>
<form action="../login/index" method="post">
{{ csrf_field() }}
<input class="btn btn-lg btn btn-primary" type="submit" value="ログアウト">
</form>
<?php
if(!empty($_POST)){
    echo 'id=  ';echo $_POST['id'] ."<br>";
    echo '名前=  ';echo $_POST['name'] ."<br>";
    echo 'フリガナ=  ';echo $_POST['kana'] ."<br>";
    // echo $_POST['id'] ."<br>";
    // echo $_POST['name'] ."<br>";
    // echo $_POST['kana'] ."<br>";
}
?>

        <form action="../update_complete/index" method="post">
        {{ csrf_field() }}
        <input class="btn btn-lg btn btn-primary" type="submit" value="更新しますか？">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="kana" value="<?=$_POST['kana']?>">
        </form>
        <form method="post" action="../update/index">
        {{ csrf_field() }}

        <!-- <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="kana" value="<?=$_POST['kana']?>"> --戻るボタンでPost送信するエラー回避-->


        <input class="btn btn-lg btn btn-primary" type="submit" value="戻る">
        </form>


</body>
</html>