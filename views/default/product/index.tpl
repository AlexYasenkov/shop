{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                <div class="col mt-3">
                    <img src="{$templateWebPath}images/products/{$product['image']}"
                         class="img-fluid" alt="picture">
                    <h4 class="mt-3">{$product['name']}</h4>
                    <p class="text-secondary">{$product['description']}</p>
                    <p class="h5">Цена: <span class="text-success">{floatval($product['price'])}</span> грн</p>
                    <a href="#" id="btnAdd_{$product['id']}" data-id = "{$product['id']}"
                       class="btn-to-cart btn btn-success btn-sm" role="button">Добавить в корзину</a>
                    <a href="#" id="btnRemove_{$product['id']}" data-id = "{$product['id']}"
                       class="btn-remove-from-cart btn btn-danger btn-sm d-none" role="button">Удалить из корзины</a>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}