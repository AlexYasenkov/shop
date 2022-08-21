{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                <div class="col mt-2">
                    {if !empty($products)}
                        <form action="/cart/order" method="POST">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Наименование</th>
                                    <th>Кол-во</th>
                                    <th>Цена за шт.</th>
                                    <th>Цена</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$products item=product name=products}
                                <tr>
                                    <td>{$smarty.foreach.products.iteration}</td>
                                    <td>
                                        <a href="/product/{$product['id']}">{$product['name']}</a>
                                    </td>
                                    <td>
                                        <input class="product-count w-100" id="{$product['id']}" type="number"
                                               name="productCount_{$product['id']}" value="1" min="1">
                                    </td>
                                    <td>
                                        <span id="productPrice_{{$product['id']}}"
                                              data-product-price = {$product['price']}>{$product['price']}</span>
                                    </td>
                                    <td>
                                        <span id="productRealPrice_{{$product['id']}}">{$product['price']}</span>
                                    </td>
                                    <td>
                                        <a href="#" id="btnRemove_{$product['id']}" data-id = "{$product['id']}"
                                           class="btn-remove-from-cart btn btn-danger btn-sm"
                                           role="button">Удалить из корзины</a>
                                        <a href="#" id="btnAdd_{$product['id']}" data-id = "{$product['id']}"
                                           class="btn-to-cart btn btn-success btn-sm d-none"
                                           role="button">Вернуть в корзину</a>
                                    </td>
                                </tr>
                                {/foreach}
                                </tbody>
                            </table>
                            {if isset($userRegisterData)}
                                <button type="submit" class="btn btn-success">Оформить заказ</button>
                            {else}
                                <h6 class="text-center font-italic">Для оформления заказа необходимо войти в систему</h6>
                            {/if}
                        </form>
                    {else}
                        <h6 class="text-center font-italic">В корзине пусто</h6>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}