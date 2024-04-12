<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
<form class="form" action="/login/input" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите логин или @mail</label>
        <input type="text" class="form-control" name = "log" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</body>
</html>