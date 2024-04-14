{include file='main.tpl'}
{foreach $product as $item}
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{$item.title}</h5>
        <p class="card-text">{$item.description}</p>
    </div>
</div>
{/foreach}
<a href="/store" class="btn btn-primary">Назад</a>