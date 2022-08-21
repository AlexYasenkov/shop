{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <h5 class="font-italic text-center mt-1">Регистрационные данные пользователя</h5>
                    <form action="#" method="POST" id="userFormChangeData" class="mt-2 w-75 mx-auto">
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input type="text" class="form-control" name="email"
                                   value="{{$userRegisterData['email']}}" disabled>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-append">
                                <span class="input-group-text">Имя</span>
                            </div>
                            <input type="text" class="form-control" name="userName"
                                   value="{{$userRegisterData['name']}}">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-append">
                                <span class="input-group-text">Телефон</span>
                            </div>
                            <input type="text" class="form-control" name="userPhone"
                                   value="{{$userRegisterData['phone']}}">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-append">
                                <span class="input-group-text">Адрес</span>
                            </div>
                            <input type="text" class="form-control" name="userAddress"
                                   value="{{$userRegisterData['address']}}">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-append">
                                <span class="input-group-text">Новый пароль</span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Пароль">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-append">
                                <span class="input-group-text">Повторите пароль</span>
                            </div>
                            <input type="password" class="form-control" name="confirmPwd" placeholder="Пароль">
                        </div>
                        <div class="text-right mt-2">
                            <button type="submit" id="btnUserChangeData"
                                    class="btn btn-outline-secondary btn-sm">Сохранить изменения</button>
                        </div>
                    </form>
                    <hr class="border-secondary">
                    <h5 class="font-italic text-center">Заказы</h5>
                    {if !empty($userOrders)}
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>ID заказа</th>
                                <th>Дата создания</th>
                                <th>Товар</th>
                                <th>Дата оплаты</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$userOrders item=order name=orders}
                                <tr>
                                    <td>{$smarty.foreach.orders.iteration}</td>
                                    <td>{$order['id']}</td>
                                    <td>{$order['date_created']}</td>
                                    <td>
                                    {foreach $order['products'] as $product}
                                        <div>
                                            <span>{$product['name']}, </span>
                                            <span>цена {$product['price']}грн, </span>
                                            <span>количество {$product['amount']}.</span>
                                        </div>
                                    {/foreach}
                                    </td>
                                    <td>{$order['date_payment']}</td>
                            {/foreach}
                            </tbody>
                        </table>
                    {else}
                        <h6 class="text-center font-italic">Нет заказов</h6>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}