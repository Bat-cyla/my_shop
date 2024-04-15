{include file='main.tpl'}
{foreach $productsArr as $elems}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{$elems.title}</h5>
            <p class="card-text">{$elems.description}</p>
            <a href="/show/{$elems.id}" class="card-link">К товару</a>
        </div>
    </div>
{/foreach}
{if ($admin==true)}
    <a href="/products" class="btn btn-primary">Назад</a>
    {/if}