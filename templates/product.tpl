{include file='main.tpl'}
{foreach $product as $item}
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{$item.title}</h5>
        <p class="card-text">{$item.description}</p>
    </div>
</div>
    <div> <a href="/product/edit/{$item.id}" class="btn btn-primary">Изменить товар</a></div>


    <div><a href="/delete/{$item.id}" class="btn btn-danger">Удалить товар</a></div>
{/foreach}

<a href="/products" class="btn btn-primary">Назад</a>