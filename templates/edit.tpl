{include file='main.tpl'}
{foreach $product as $item}
<form action="/edit/{$item.id}" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Название товара</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{$item.title}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Описание товара</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="desc" value="{$item.description}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{/foreach}