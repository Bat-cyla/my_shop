{include file='main.tpl'}
<form class="form" action="/input" method="POST">
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