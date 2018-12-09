<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>削除完了画面</h1>
<form action="../login/index" method="post">
{{ csrf_field() }}
<input class="btn btn-lg btn btn-primary" type="submit" value="ログアウト">
</form>
<form>
{{ csrf_field() }}
</form>
</body>
</html>