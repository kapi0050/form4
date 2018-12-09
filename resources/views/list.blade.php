<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>お問い合わせ一覧</h1>
<form action="../login/index" method="post">
{{ csrf_field() }}
<input class="btn btn-lg btn btn-primary" type="submit" value="ログアウト">
</form>

<form action="../list/index" method="post">
{{ csrf_field() }}
<input style="width:150px;" class="form-control" type="text" name="Search" value="">
<input class="btn btn-lg btn btn-primary" type="submit" value="検索">
</form>

<table border="1" >
<?php     foreach ( $items as $value ) {;?>
      <tr>
        <td><?php echo $value->id;?></td><!--配列の中身を表示させる方法-->
        <td><?php echo $value->name;?></td>
        <td><?php echo $value->kana;?></td>
        <form action="../update/index" method="post">
        {{ csrf_field() }}
        <td><input type="submit" value="更新"></td>
        <input type="hidden" name="id" value="<?=$value->id?>">
        <input type="hidden" name="name" value="<?=$value->name?>">
        <input type="hidden" name="kana" value="<?=$value->kana?>">
        </form>
        <form action="../delete_confirm/index" method="post">
        {{ csrf_field() }}
        <td><input type="submit" value="削除"></td>
        <input type="hidden" name="id" value="<?=$value->id?>">
        <input type="hidden" name="name" value="<?=$value->name?>">
        <input type="hidden" name="kana" value="<?=$value->kana?>">
        </form>
      </tr>
<?php     }?>

</table>
</body>
</html>
