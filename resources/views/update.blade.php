<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>更新変更画面</h1>
<form action="../login/index" method="post">
{{ csrf_field() }}
<input class="btn btn-lg btn btn-primary" type="submit" value="ログアウト">
</form>
<?php
if(isset($_POST['id'])){//!emptyは使えない
    // echo 'id=  ';echo $_POST['id'] ."<br>";
    // echo '名前=  ';echo $_POST['name'] ."<br>";
    // echo 'フリガナ=  ';echo $_POST['kana'] ."<br>";
    // echo $_POST['id'] ."<br>";
    // echo $_POST['name'] ."<br>";
    // echo $_POST['kana'] ."<br>";
}
?>

<form method="post" action="../update_confirm/index">
{{ csrf_field() }}
<div>名前</div>
<input style="width:150px;" class="form-control" type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
<div>フリガナ</div>
<input style="width:150px;" class="form-control" type="text" name="kana" value="<?php if(isset($_POST['kana'])) echo $_POST['kana'] ?>">
<input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'] ?>">
    <input class="btn btn-lg btn btn-primary" type="submit" value="変更">
</form>
<form method="post" action="../list/index">
{{ csrf_field() }}
<input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'] ?>">
<input type="hidden" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
<input type="hidden" name="kana" value="<?php if(isset($_POST['kana'])) echo $_POST['kana'] ?>">
    <input class="btn btn-lg btn btn-primary" type="submit" value="戻る">
</form>


</body>
</html>