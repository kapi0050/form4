<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>

<h1>ログイン画面</h1>

<form text-center method="post" action="../login/index">
{{ csrf_field() }}
    <div class="form-group">メールアドレス</div>
    <input style="width:150px;" class="form-control" type="text" name="id" value="">
    <div>パスワード</div>
    <input style="width:150px;" class="form-control" type="text" name="pass" value="">
    <input type="submit" class="btn btn-lg btn btn-primary" value="ログイン">
</form>
</body>
</html>