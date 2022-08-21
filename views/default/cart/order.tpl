{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                <div class="col mt-2">
                    <hr class="border-secondary">
                    <h5 class="font-italic text-center">Данные заказа</h5>
                    <hr class="border-secondary">
                    {if !empty($products)}
                        <form id="saveOrderForm" action="#" method="POST">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Наименование</th>
                                    <th>Кол-во</th>
                                    <th>Цена за шт.</th>
                                    <th>Стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$products item=product name=products}
                                    <tr>
                                        <td>{$smarty.foreach.products.iteration}</td>
                                        <td>{$product['name']}</td>
                                        <td>
                                            {$product['count']}
                                            <input type="hidden"
                                                   name="item{$product['id']}_count" value="{$product['count']}">
                                        </td>
                                        <td>
                                            {$product['price']}
                                            <input type="hidden"
                                                   name="item{$product['id']}_price" value="{$product['price']}">
                                        </td>
                                        <td>
                                            {$product['realPrice']}<span class="pl-1 font-italic">грн.</span>
                                            <input type="hidden"
                                                   name="item{$product['id']}_realPrice" value="{$product['realPrice']}">
                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                            {if isset($userRegisterData)}
                                <button id="btnSaveOrder" type="submit" class="btn btn-success">Подтвердить заказ</button>
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