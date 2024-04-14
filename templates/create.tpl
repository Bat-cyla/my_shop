{include file='main.tpl'}
<form action="/create" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Название товара</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Описание товара</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>