{include file='main.tpl'}
{foreach $productsArr as $elems}
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{$elems.title}</h5>
        <p class="card-text">{$elems.description}</p>
        <a href="product/{$elems.id}" class="card-link">К товару</a>
    </div>
</div>
{/foreach}


<div>  <a href="/products/create" class="btn btn-primary">Добавить товар</a></div>
<div>   <a href="/store" class="btn btn-primary">Просмотреть витрину</a></div>