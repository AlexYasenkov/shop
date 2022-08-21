{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                {foreach $products as $product}
                    <div class="col-md-6 col-lg-4 mt-3">
                        <div class="card">
                            <img src="{$templateWebPath}images/products/{$product['image']}"
                                 class="card-img-top" alt="picture">
                            <div class="card-body">
                                <h5 class="card-title">{$product['name']|truncate:10}</h5>
                                <p class="card-text">{$product['description']|truncate:50}</p>
                                <a href="/product/{$product['id']}" class="btn btn-primary">Смотреть</a>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}